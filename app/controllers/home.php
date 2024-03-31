<?php

class Home extends Controller
{
    public function index($name = '')
    {
        $this->view('home/index', ['name' => 'Admin']);
    }

    public function create($username = '', $email = '')

    {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }
}
