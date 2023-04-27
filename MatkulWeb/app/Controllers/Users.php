<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        return view('Users/index');
    }

    public function login()
    {
        // Load the model
        $userModel = new \App\Models\UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // Get the user with the provided username
        $user = $userModel->where('username', $username)->first();

        // Check if the user exists and the password matches
        if ($user && password_verify($password, $user['password'])) {
            session()->setFlashdata('message', 'Login Success!');
            return redirect()->to('/product/index');
        } else {
            session()->setFlashdata('message', 'Login failed! Please check your username or password!');
            return redirect()->to('/user/index');
        }
    }
}
