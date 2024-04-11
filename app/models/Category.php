<?php

// where are pulling in https://packagist.org/packages/illuminate/database => https://laravel.com/docs/11.x/eloquent
// cmd: composer require illuminate/database

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Eloquent
{
    // properties
    protected $fillable = ['category_name', 'description'];

    // relations
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
