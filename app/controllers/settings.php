<?php

class Settings extends Controller
{
    public function index()
    {
        $view = 'settings/index';
        $this->layout($view, 'content', [], 'default');
    }
}
