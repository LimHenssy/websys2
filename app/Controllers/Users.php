<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        // Query Builder database retrieval[cite: 2]
        $data = [
            'title' => 'User Accounts',
            'users' => $userModel->findAll()
        ];

        return view('users/index', $data);
    }
}