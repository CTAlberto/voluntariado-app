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
</head>
<body>
    <form action="" method="POST">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Iniciar sesión</button>
    </form>
    <a href="../app/views/register.php">Registrarse</a>
    <br>
</body>
</html>