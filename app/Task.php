<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'task_title', 'task_status', 'task_description'
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
