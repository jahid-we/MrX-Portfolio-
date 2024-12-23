<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'duration',
        'title',
        'designation',
        'details'
    ];
}
