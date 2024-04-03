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

    // public function view($view, $data = [])
    // {
    //     require_once '../app/views/' . $view . '.php';
    // }

    public function layout($view, $slot, $data = [])
    {
        require_once '../app/static/layout.php';
    }
}
