<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'email',
        'location',
        'avatar',
        'followers',
        'followings',
        'repos',
        'joined',
    ];

}