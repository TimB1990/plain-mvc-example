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

    public function create()
    {
        // show create view
    }

    public function store()
    {
        // store entity in database
    }

    public function edit()
    {
        // show update view
    }

    public function update()
    {
        // update entity in database
    }

    public function trash()
    {
        // put entity to trash
    }

    public function destroy()
    {
        // delete entity from database
    }
}
