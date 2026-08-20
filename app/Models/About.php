<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class About extends Model
{
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
