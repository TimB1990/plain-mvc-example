<?php

class User extends Controller
{
    public function create($username = '', $email = '')

    {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }
}
