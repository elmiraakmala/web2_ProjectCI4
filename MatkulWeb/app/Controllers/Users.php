<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    protected $UserData;

    public function __construct()
    {
        $this->UserData = new UserModel();
    }

    public function index()
    {
        return view('Users/index');
    }

    public function login()
    {
        // Load the model
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // Get the user with the provided username
        $user =  $this->UserData->where('username', $username)->first();

        // Check if the user exists and the password matches
        if ($user && password_verify($password, $user['password'])) {
            session()->setFlashdata('message', 'Login Success!');
            $newdata = [
                'username'  => $username,
                'logged_in' => TRUE
            ];

            $this->session->set($newdata); // setting session data

            return redirect()->to('/product/index');
        } else {
            session()->setFlashdata('message', 'Login failed! Please check your username or password!');
            return redirect()->to('/user/index');
        }
    }

    function logout()
    {

        session()->destroy();
        return redirect()->to(base_url('/user/index'));
    }

    public function register()
    {

        return view('Users/register');
    }

    public function save()
    {

        $password = $this->request->getVar('password');
        $test = password_hash($password, PASSWORD_DEFAULT);

        $data = array(
            'username' => $this->request->getVar('username'),
            'password' => $test
        );

        $this->UserData->save($data);
        session()->setFlashdata('message', 'Data successfully saved!');
        return redirect()->to('/user/index');
    }
}
