<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'app_jobs';

    protected $fillable = [
        'title',
        'company',
        'type',
        'location',
        'description',
        'jobType',
        'skills',
        'languages',
        'urgent'
    ];

    protected $casts = [
        'skills' => 'array',
        'languages' => 'array',
        'urgent' => 'boolean'
    ];
}
