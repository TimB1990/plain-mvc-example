<?php

class Controller
{
    public function model($model)
    {
        // return model for example 'User'
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        // data is empty array in case we don't have data
        require_once '../app/views/' . $view . '.php';
    }
}
