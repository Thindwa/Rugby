<?php

namespace App\Models;

use App\Models\Concerns\GeneratesResponsiveImageVariants;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class About extends Model
{
    use GeneratesResponsiveImageVariants;

    protected static function booted(): void
    {
        static::saved(fn () => Cache::forget('site.support_url'));
    }

    protected $fillable = [
        'title',
        'image',
        'description',
        'vision',
        'mission',
        'support_url',
    ];
}
