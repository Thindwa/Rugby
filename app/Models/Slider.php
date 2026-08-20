<?php

namespace App\Models;

use App\Models\Concerns\GeneratesResponsiveImageVariants;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use GeneratesResponsiveImageVariants;

    protected $fillable = [
        'title',
        'sub_title',
        'image',
        'description',
    ];
}
