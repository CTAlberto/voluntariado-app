<?php
require __DIR__ . '/../app/Controllers/UserController.php';
use app\Controllers\UserController;
$user = new UserController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Iniciar sesión</button>
    </form>
    <a href="register.php">Registrarse</a>
    <br>
    <?=var_dump($user);?>
</body>
</html>