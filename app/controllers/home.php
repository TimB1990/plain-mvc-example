<?php

class Home extends Controller
{
    public function index()
    {
        $view = 'home/index';
        $this->layout($view, 'content', [], 'default');
    }
}
