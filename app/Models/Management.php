<?php

namespace App\Models;

use App\Models\Concerns\GeneratesResponsiveImageVariants;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use GeneratesResponsiveImageVariants;

    protected $fillable = [
        'name',
        'image',
        'position',
        'description',
    ];
}
