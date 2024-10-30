<?php
session_start();
require __DIR__ . '/../Controllers/OpportunitiesController.php';

use App\Controllers\OpportunitiesController;

if (!isset($_SESSION['user'])) {
    // Redirige al usuario a la página de inicio de sesión si no hay sesión iniciada
    header("Location: /voluntariado-app/public/index.php");
    exit();
}


function getAll()
{
    $opportunitiesController = new OpportunitiesController();
    $opportunities = $opportunitiesController->getOpportunities();
    return $opportunities;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php include 'header.php'; ?>
    <div id="mainVolunteeres">
        <h1>Voluntariados</h1>
    </div>
    <div>
        <?php
            
            foreach (getAll() as $opportunity) {
                echo '<div class="card" style="width: 18rem;">
                <img src="../../public/assets/img/'.$opportunity->image_url.'" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">' . $opportunity->title . '</h5>
                    <p class="card-text">' . $opportunity->description . '</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
                </div>';
            }
            
            
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>


</html>