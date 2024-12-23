<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seoproperty extends Model
{
    protected $fillable = [
        'pageName', 'title', 'keywords', 'description',
        'ogSiteName', 'ogUrl', 'ogTitle', 'ogDescription', 'ogImage'
    ];
}
