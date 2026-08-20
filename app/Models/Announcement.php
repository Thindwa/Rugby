<?php

namespace App\Models;

use App\Models\Concerns\GeneratesResponsiveImageVariants;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use GeneratesResponsiveImageVariants;

    protected $fillable = [
        'title',
        'image',
        'description',
    ];
}
