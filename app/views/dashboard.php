<?php
    session_start();
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
    <link rel="stylesheet" href="../../public/assets/css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div>
        <h1>Dashboard</h1>
        <p>Bienvenido, <?php echo $_SESSION['user']['name']; ?></p>
        <a href="/voluntariado-app/app/Controllers/AuthController.php?logout=true">Cerrar sesión</a>
    </div>
    <?php include 'footer.php'; ?>
</body>


</html>