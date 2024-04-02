<?php

class Settings extends Controller
{
    public function index($name = '')
    {
        $view = 'settings/index';
        $this->layout($view, 'content');
    }
}
