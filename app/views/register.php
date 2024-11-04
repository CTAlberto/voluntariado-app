<?php
require __DIR__ . '/../Controllers/UserController.php';
require __DIR__ . '/../Controllers/AuthController.php';
use App\Controllers\AuthController;
use App\Controllers\UserController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController = new UserController();
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $userPass = $_POST['userPass'];
    echo $userName . $email . $userPass;
    if($userController->exist($userName, $email)){
        echo 'Error: Usuario o email ya existe.';
        // Aquí deberías mostrar un mensaje de error dado que ya existe un usuario con ese nombre o email
    }else{
        $userController->create($userName, $email, $userPass);
        $auth = new AuthController();
        $auth->login();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            align-items: center;
        }
        form{
            padding: 2%;
            border: 2px solid #ccc;
            border-radius: 10px;
            width: 50%;
            margin: 0 auto;
            margin-top: 7%;
        }
    </style>
</head>

<body>
    <form id="registerForm" name="registerForm" method="POST">
        <div class="mb-3">
            <label for="userName" class="form-label">Nombre de Usuario</label>
            <input type="text" class="form-control" name="userName" id="userName" required>
        </div>
        <div class="mb-3">
            <label for="userEmail" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">No compartiremos su email con nadie</div>
        </div>
        <div class="mb-3">
            <label for="userPass" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="userPass" id="userPass" required>
        </div>
        <div class="mb-3"> 
            <label for="userPassRepeat" class="form-label">Repita su contraseña</label>
            <input type="password" class="form-control" id="userPassRepeat" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse </button>
    </form>
</body>

</html>