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
                ->only(['id', 'category_name', 'description'])
                ->merge(['product_count' => $category->products()->count()])
                ->merge(['actions' 
                    => $this->initializeUIactionsExistingModel('cid', $category->id, 'categories', true)
                ])
                ->all();
        });

        $this->layout($view, 'content', $data, $this->template);
    }

    public function create($view = 'categories/create_edit')
    {
        $this->layout($view, 'content', ['task' => 'store'], 'default');
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

    public function edit($view = 'categories/create_edit')
    {
        if (isset($_GET['cid']) && intval($_GET['cid'])) {
            $category = $this->model->find($_GET['cid']);
            if (!isset($category)) {
                $errorData = ['error' => ['msg' => 'Category not found!']];
                $this->layout($view, 'content', $errorData);
            } else {
                $this->layout($view, 'content', [
                    'category' => $category,
                    'task' => 'update'
                ]);
            }
        }
    }

    public function update($id = null)
    {
        if (empty($_POST)) return;
        $id = $this->initializeId($id);
        $data = $this->initializeFields();
        try {
            $this->model->find(intval($id))->update($data);
            redirect('/categories');
        } catch (\Exception $e) {
            echo "An error occured " . $e->getMessage();
        }
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
