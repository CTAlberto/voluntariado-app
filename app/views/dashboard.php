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
    <div class="container">
        <div id="mainVolunteeres">
            <div id="imageCarrousel"></div>
        </div>
        <aside id="asideVolunteers">
            <h2>Voluntarios</h2>
            <p>¿Quieres ser voluntario?</p>
            <a href="volunteers.php" class="btn btn-primary">Ver más</a>
        </aside>
    </div>
        <?php

        
        foreach (getAll() as $opportunity) {
            $json = json_encode($opportunity,  JSON_PRETTY_PRINT);

            $jsonArray[] = $json;
        }
        // Decodificar cada JSON a un array de PHP
        $jsonMap = array_map('json_decode', $jsonArray);

        // Codificar el array a JSON para JavaScript
        $jsonForJs = json_encode($jsonMap);
        
        ?>

<script>
    var opportunities = <?php echo $jsonForJs; ?>;
    let imgDiv =document.getElementById('imageCarrousel');
    let volName = document.getElementById('h2name');
    // Acceder a las propiedades y hacer algo con ellas
    opportunities.forEach(function(opportunity) {
        imgDiv.innerHTML += '<h2>'+opportunity.title+'</h2><img style="border-radius: 3%; margin-bottom: 10px;"  width="75%" height="75%" src="../../public/assets/img/' + opportunity.image_url + '" alt="' + opportunity.title + '"><p>'+opportunity.description+'</p><p>'+opportunity.requirements+'</p>';

    });
</script>
    
    <?php include 'footer.php'; ?>
</body>


</html>