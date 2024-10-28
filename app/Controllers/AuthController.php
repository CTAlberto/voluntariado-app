<?php

namespace App\Controllers;

use App\Models\UserModel;
use PDO;
class AuthController
{
    protected $model;
    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->model = new UserModel();
            $user = $this->model->getUserByEmail($email);
            if($user){
                if(password_verify($password, $user->password)){
                    $_SESSION['user'] = $user;
                    header('Location: /app/views/dashboard.php');
                }else{
                    echo 'Contraseña incorrecta';
                }
            }else{
                echo 'Usuario no encontrado';
            }
        }
    }

    public function getUserByEmail($email){
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $query = $this->model->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();
        if($query->rowCount() > 0){
            return $query->fetch(PDO::FETCH_OBJ);
        }else{
            return false;
        }


    }
}   
