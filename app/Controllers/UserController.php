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
    }

}