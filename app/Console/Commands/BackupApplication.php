<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class BackupApplication extends Command
{
    protected $signature = 'backup:application {--keep=14 : Number of days of backups to retain}';
    protected $description = 'Back up the MySQL database and public uploads to private storage';

    public function handle(): int
    {
        $backupDirectory = storage_path('app/private/backups');
        if (! is_dir($backupDirectory)) {
            mkdir($backupDirectory, 0750, true);
        }

        $stamp = now()->format('Y-m-d_H-i-s');
        $databaseFile = $backupDirectory . "/database-{$stamp}.sql.gz";
        $uploadsFile = $backupDirectory . "/uploads-{$stamp}.tar.gz";
        $database = config('database.connections.mysql');

        $dump = new Process([
            'mysqldump',
            '--host=' . $database['host'],
            '--port=' . $database['port'],
            '--user=' . $database['username'],
            '--single-transaction',
            '--quick',
            $database['database'],
        ], base_path(), ['MYSQL_PWD' => $database['password'] ?? '']);
        $dump->setTimeout(300);
        $dump->run();

        if (! $dump->isSuccessful()) {
            $this->error('Database backup failed: ' . trim($dump->getErrorOutput()));
            return self::FAILURE;
        }

        $compressed = gzopen($databaseFile, 'wb9');
        gzwrite($compressed, $dump->getOutput());
        gzclose($compressed);

        $archive = new Process(['tar', '-czf', $uploadsFile, '-C', storage_path('app'), 'public']);
        $archive->setTimeout(300);
        $archive->run();

        if (! $archive->isSuccessful()) {
            $this->error('Uploads backup failed: ' . trim($archive->getErrorOutput()));
            return self::FAILURE;
        }

        $keepDays = max(1, (int) $this->option('keep'));
        foreach (glob($backupDirectory . '/*') ?: [] as $file) {
            if (is_file($file) && filemtime($file) < now()->subDays($keepDays)->getTimestamp()) {
                unlink($file);
            }
        }

        $this->info("Backup created: {$stamp}");
        return self::SUCCESS;
    }
}
