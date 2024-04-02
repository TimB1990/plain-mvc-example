<?php

use App\Models\Product;

class Products extends Controller
{
    public function index()
    {
        $data = Product::all();
        $view = 'products/index';
        $this->layout($view, 'content');
    }
}
