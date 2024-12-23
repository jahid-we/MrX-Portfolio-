<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = ['twitterLink', 'githubLink', 'linkedinLink'];
}
