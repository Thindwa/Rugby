<?php

namespace App\Models;

use App\Models\Concerns\GeneratesResponsiveImageVariants;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use GeneratesResponsiveImageVariants;

    protected $fillable = [
        'title',
        'name',
        'image',
        'description',
        'url_link',
    ];
}
