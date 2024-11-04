<?php
namespace App\Controllers;

use App\Models\UserModel;

class AuthController
{
    protected $model;

    public function __construct()
    {
        session_start();
        $this->model = new UserModel();
    }

    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'];
            $password = $_POST['userPass'];
            $user = $this->model->getUserByEmail($email);
            
            if($user !== null){
                
                if(password_verify($password, $user->getPassword())){
                    session_start();
                    $_SESSION['user'] = [
                        'id' => $user->getId(),
                        'name' => $user->getName(),
                        'role' => $user->getRole(),
                        'email' => $user->getEmail(),
                        'created_at' => $user->getCreatedAt()
                    ];
                    header('Location: /voluntariado-app/app/views/dashboard.php');
                }else{
                    echo 'Contraseña incorrecta';
                }
            }else{
                echo 'Usuario no encontrado';
            }
        }
    }

    
}
