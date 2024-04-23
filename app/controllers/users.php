<?php

use App\Models\User;

class Users extends AbstractCrudController
{
    private $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function index($view = 'users/index')
    {
        $products = $this->model->get();

        $data = $products->map(function ($product) {
            return collect($product->toArray())
                ->only(['username', 'email'])
                ->all();
        });

        $this->layout($view, 'content', $data, 'default');
    }

    public function create($view = 'users/create')
    {
    }

    public function store()
    {
    }

    public function edit($view = 'users/edit')
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

    public function trashed($view = 'users/trashed')
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
