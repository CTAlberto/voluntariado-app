<?php
   session_start();
   var_dump($_SESSION['user']) ;
   if (!isset($_SESSION['user'])) {
    // Redirige al usuario a la página de inicio de sesión si no hay sesión iniciada
    header("Location: /voluntariado-app/public/index.php");
    exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Usuario sesion iniciada
</body>
</html>