<?php

namespace App\Models\Concerns;

use App\Services\ResponsiveImageService;

trait GeneratesResponsiveImageVariants
{
    protected static function bootGeneratesResponsiveImageVariants(): void
    {
        static::saved(function ($model): void {
            if ($model->wasChanged('image') && filled($model->image)) {
                app(ResponsiveImageService::class)->generateSafely($model->image);
            }
        });
    }
}
