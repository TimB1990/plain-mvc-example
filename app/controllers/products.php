<?php

use App\Models\Product;
use App\Models\Category;

class Products extends AbstractCrudController
{

    private $model;
    private $categories;
    private $template;

    // CONTRUCTOR
    public function __construct()
    {
        $this->model = new Product();
        $this->categories = Category::all();
        $this->template = 'default';
    }

    // PRIVATE METHODS
    private function listedProductsByCategory()
    {
        return $this->categories->each(function ($cat) {
            return collect([
                'category_name' => $cat->name,
                'products' => $cat->products
            ]);
        });
    }

    // PUBLIC METHODS
    public function index($view = 'products/index')
    {
        // check if we want to list by category
        if (isset($_GET['categories']) && boolval($_GET['categories'])) {
            $data = $this->listedProductsByCategory();
            $this->template = 'byCategory';
        } else {
            $products = $this->model->with('category')->get();

            // also add category name to data that is sent, since relation defined
            $data = $products->map(function ($product) {
                return collect($product->toArray())
                    ->only(['id', 'product_name', 'description', 'price'])
                    ->merge(['category_name' => $product->category->category_name, 'category_id' => $product->category->id])
                    ->merge([
                        'actions'
                        => $this->initializeUIactionsExistingModel('pid', $product->id, 'products', true)
                    ])
                    ->all();
            });
        }

        $this->layout($view, 'content', $data, $this->template);
    }


    public function create($view = 'products/create_edit')
    {
        // pass categories so there can be a category dropdown
        $categoryData = $this->categories
            ->map(function ($category) {
                return collect($category->toArray())
                    ->only(['id', 'category_name'])
                    ->all();
            });
        $this->layout($view, 'content', [
            'categories' => $categoryData,
            'task' => 'store'
        ]);
    }

    public function store()
    {

        if (empty($_POST)) return;

        $data = $this->initializeFields();

        // category_id contains prefix 'cat' before '_', the id to reference from the 'categories' table is the underscore's postfix
        // this is going to be basic convention of HTML 'name' attributes to have them unique if needed
        // so we do some mutations of the data

        $foreignKeyValue = intval(explode('cat_', trim($data['category_id']))[1]);
        $data['category_id'] = $foreignKeyValue;

        $priceFieldValue = floatval($data['price']);
        $data['price'] = $priceFieldValue;

        try {
            $this->model->create($data);
            redirect('/products');
        } catch (\Exception $e) {
            echo "An error occured " . $e->getMessage();
        }
    }

    public function edit($view = 'products/create_edit')
    {
        if (isset($_GET['pid']) && intval($_GET['pid'])) {
            $product = $this->model->with('category')->find($_GET['pid']);
            if (!isset($product)) {
                $errorData = ['error' => ['msg' => 'Product not found!']];
                $this->layout($view, 'content', $errorData, 'default');
            } else {
                $categoryData = $this->categories
                    ->map(function ($category) {
                        return collect($category->toArray())
                            ->only(['id', 'category_name'])
                            ->all();
                    });
                $this->layout($view, 'content', [
                    'categories' => $categoryData,
                    'product' => $product,
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
        $foreignKeyValue = intval(explode('cat_', trim($data['category_id']))[1]);
        $data['category_id'] = $foreignKeyValue;

        $priceFieldValue = floatval($data['price']);
        $data['price'] = $priceFieldValue;

        try {
            $this->model->find(intval($id))->update($data);
            redirect('/products');
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
