<?php

class Controller
{
    protected function initializeId($id)
    {
        if ($id === null && isset($_POST["id"])) {
            return $_POST["id"];
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

    public function layout($view, $slot, $data = [])
    {
        // make sure to always call $data to get the data sent with this method to the view.
        require_once '../app/static/layout.php';
    }
}
