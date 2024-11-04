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

    public function exist($name, $email){
        if($this->userModel->exist($name) || $this->userModel->exist($email)){
            // Devuelve true si ya existe un usuario con ese nombre o email
            return true;
        }else{
            // Devuelve false si no existe un usuario con ese nombre o email
            return false;
        }
        

    }
    public function create($name, $email, $password){
        $this->userModel->setName($name);
        $this->userModel->setEmail($email);
        $this->userModel->setPassword($password);
        $this->userModel->setRole(3);
        $this->userModel->save();
    }

}