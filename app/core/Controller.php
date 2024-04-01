<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function layout($view, $slot, $data = [])
    {
        require_once '../app/static/layout.php';
    }
}
