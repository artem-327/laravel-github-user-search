<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repo extends Model
{
    protected $fillable = [
        'name',
        'username',
        'forks',
        'stars',
    ];

}