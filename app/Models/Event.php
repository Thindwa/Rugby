<?php

namespace App\Models;

use App\Models\Concerns\GeneratesResponsiveImageVariants;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use GeneratesResponsiveImageVariants;

    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'status',
        'location',
        'image',
        'description',
    ];
}
