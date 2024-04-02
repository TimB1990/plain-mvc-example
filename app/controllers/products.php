<?php

use App\Models\Product;

class Products extends Controller
{
    public function index()
    {
        $products = Product::get();
        $data = $products->map(function ($product) {
            return collect($product->toArray())
                ->only(['product_name', 'description', 'price'])
                ->all();
        });
        $view = 'products/index';
        $this->layout($view, 'content', $data);
    }
}
