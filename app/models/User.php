<?php

// where are pulling in https://packagist.org/packages/illuminate/database => https://laravel.com/docs/11.x/eloquent
// cmd: composer require illuminate/database

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;

    // public $timestamps = [];

    protected $fillable = ['username', 'email', 'created_at', 'updated_at'];
}
