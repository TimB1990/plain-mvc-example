<?php

use App\Models\User;

class Users extends Controller
{
    public function index()
    {
        $data = User::all();
        $view = 'users/index';
        $this->layout($view, 'content');
    }

    public function create($username = '', $email = '')
    {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }
}
