<?php

require __DIR__ . '/../app/Controllers/UserController.php';
use App\Controllers\AuthController;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require __DIR__ . '/../app/Controllers/AuthController.php';
    $auth = new AuthController();
    $auth->login();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card{
            width: 50%;
            margin: 0 auto;
            margin-top: 10%;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            Inicio sesión
        </div>
        <div class="card-body">
            <p class="card-text">
                <form action="" method="POST">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                <label for="password">Password</label>
                <input type="password" name="userPass" id="userPass">
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
            </p>
            <a href="../app/views/register.php" class="btn btn-link">Registro</a>
        </div>
    </div>
</body>
</html>