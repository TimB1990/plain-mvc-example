<?php

// where are pulling in https://packagist.org/packages/illuminate/database => https://laravel.com/docs/11.x/eloquent
// cmd: composer require illuminate/database

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Eloquent
{
    // properties
    protected $fillable = ['product_name', 'price', 'description'];

    // relations
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
