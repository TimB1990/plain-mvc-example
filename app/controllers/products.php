<?php

use App\Models\Product;

class Products extends AbstractCrudController
{
    private $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    public function index($view = 'products/index')
    {
        $products = $this->model->get();

        $data = $products->map(function ($product) {
            return collect($product->toArray())
                ->only(['product_name', 'description', 'price'])
                ->all();
        });

        $this->layout($view, 'content', $data);
    }

    public function create($view = 'products/create')
    {
        $this->layout($view, 'content', ['data' => 'test']);
    }

    public function store()
    {
        if (empty($_POST)) {
            return;
        }

        $data = $this->initializeFields();
        $priceFieldValue = floatval($data['price']);
        $data['price'] = $priceFieldValue;

        try {
            $this->model->create($data);
            redirect('/products');
        } catch (\Exception $e) {
            echo "An error occured " . $e->getMessage();
        }
    }

    public function edit($view = 'products/edit')
    {
    }

    public function update($id = null)
    {
        $id = $this->initializeId($id);
    }

    public function trash($id = null)
    {
        $id = $this->initializeId($id);
    }

    public function trashed($view = 'products/trashed')
    {
    }

    public function restore($id = null)
    {
        $id = $this->initializeId($id);
    }

    public function destroy($id = null)
    {
        $id = $this->initializeId($id);
    }
}
