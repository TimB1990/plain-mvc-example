<?php

class Controller
{
    protected function initializeId($id)
    {
        if ($id === null && isset($_POST["id"])) {
            return $_POST['id'];
        }
        return $id;
    }

    protected function initializeFields()
    {
        $fields = [];
        foreach ($_POST as $key => $value) {

            $fields[$key] = $value;
        }
        return $fields;
    }

    protected function initializeUIactionsExistingModel($query_param_for_id, $model_id, $controller_name, $useIcon = false){

        return [
            'edit' => [
                'title' => 'Edit',
                'icon' => ($useIcon) ? PROJECT_ROOT . '/app/static/icons/edit.svg' : '',
                'url' => $controller_name . '/edit?' . $query_param_for_id . '=' . $model_id
            ],
            'trash' => [
                'title' => 'Trash',
                'icon' => ($useIcon) ? PROJECT_ROOT . '/app/static/icons/trash.svg' : '',
                'url' => $controller_name . '/trash?' . $query_param_for_id . '=' . $model_id
            ]
            // 'restore' => [
            //     'title' => 'Edit',
            //     'icon' => ($useIcon) ? PROJECT_ROOT . '/app/static/icons/restore.svg' : '',
            //     'url' => $controller_name . './restore?' . $query_param_for_id . '=' . $model_id
            // ],
            // 'destroy' => [
            //     'title' => 'Edit',
            //     'icon' => ($useIcon) ? PROJECT_ROOT . '/app/static/icons/destroy.svg' : '',
            //     'url' => $controller_name . './destroy?' . $query_param_for_id . '=' . $model_id
            // ],
        ];
    }

    public function layout($view, $slot, $data = [], $template = 'default')
    {
        // make sure to always call $data to get the data sent with this method to the view.
        require_once '../app/static/layout.php';
    }
}
