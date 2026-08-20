<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Spatie\Image\Image;

class ResponsiveImageService
{
    /**
     * Create non-destructive WebP variants for a public-disk upload.
     */
    public function generate(?string $path, string $disk = 'public'): void
    {
        if (! $path) {
            return;
        }

        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

        if (! in_array($extension, ['jpg', 'jpeg', 'png', 'webp'], true)) {
            return;
        }

        $storage = Storage::disk($disk);
        $source = $storage->path($path);

        if (! is_file($source)) {
            return;
        }

        $basePath = substr($path, 0, -strlen(pathinfo($path, PATHINFO_EXTENSION))) . 'webp';

        foreach ([
            [$basePath, 1600, 80],
            [substr($basePath, 0, -5) . '-1200.webp', 1200, 80],
            [substr($basePath, 0, -5) . '-640.webp', 640, 78],
        ] as [$variant, $width, $quality]) {
            if ($storage->exists($variant)) {
                continue;
            }

            Image::useImageDriver(config('image-library.image_driver', 'gd'))
                ->loadFile($source)
                ->width($width)
                ->quality($quality)
                ->format('webp')
                ->save($storage->path($variant));
        }
    }

    public function generateSafely(?string $path, string $disk = 'public'): void
    {
        try {
            $this->generate($path, $disk);
        } catch (\Throwable $exception) {
            Log::warning('Responsive image generation failed.', [
                'path' => $path,
                'message' => $exception->getMessage(),
            ]);
        }
    }
}
