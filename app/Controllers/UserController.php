<?php

namespace App\Controllers;

require __DIR__ . '/../Models/UserModel.php';
use App\Models\UserModel;

class UserController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->userModel->setId(1);
        $this->userModel->setName('John Doe');
        $this->userModel->setEmail('jhon@gmail.com');
        $this->userModel->setPassword('123456');
        $this->userModel->setRole(1);
        $this->userModel->setCreatedAt(date('Y-m-d H:i:s'));
        $this->userModel->setUpdatedAt(null);

    }

}