<?php

class Home extends Controller
{
    public function index($name = '')
    {
        $view = 'home/index';
        $this->layout($view, 'content', ['name' => 'Admin']);
    }
}
