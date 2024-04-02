<?php

use App\Models\User as UserModel;

class User extends Controller
{
    // public function index()
    // {
    // }

    public function create($username = '', $email = '')
    {
        UserModel::create([
            'username' => $username,
            'email' => $email
        ]);
    }
}
