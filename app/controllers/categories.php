<?php

use App\Models\Category;

class Categories extends AbstractCrudController
{
    private $model;
    private $template;

    // CONTRUCTOR
    public function __construct()
    {
        $this->model = new Category();
        $this->template = 'default';
    }


    // PUBLIC METHODS
    public function index($view = 'categories/index')
    {
        $categories = $this->model->get();
        $data = $categories->map(function ($category) {
            return collect($category->toArray())
                ->only(['category_name', 'description'])
                ->all();
        });

        $this->layout($view, 'content', $data, $this->template);
    }

    public function create($view = 'categories/create')
    {
        $this->layout($view, 'content', null, 'default');
    }

    public function store()
    {
        if (empty($_POST)) {
            return;
        }

        $data = $this->initializeFields();

        try {
            $this->model->create($data);
            redirect('/categories');
        } catch (\Exception $e) {
            echo "An error occured " . $e->getMessage();
        }
    }

    public function edit($view = 'categories/edit')
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
