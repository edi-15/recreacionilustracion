<?php


//echo rand();

$variable = $_GET["opciones"];

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ediso ALamos | Recreacion Ilustraciones</title>
        <link rel="stylesheet" href="style.css?v=<?php echo rand()?>">
    </head>
    <body>
    <header>
        <div class="content-nav">
            <h1 class="titulopr">Edison ALamos | Recreacion Ilustraciones</h1>
        </div>
    </header>
if ($variable == 'primera') { ?>
    echo"

<div class='contenedor'>
        <div class='content-ti'>
        <h3 class='antesdespues'>Antes</h3>
        <h3 class='antesdespues'>Despues</h3>
        </div>

        <div class='content-img'>
            <img class='imgs' src='https://dsd3rmhotmx78.cloudfront.net/get/g509c78edf384b0686ada6f5f526abb6396b306f3e5a1c998cc47a0be7d895a8eb28ee5c38b6a84a074e8117e155b9d69_640.jpg' alt='' title='Antes'>
            <img class='imgs' src='img/robotnuevo.jpg' alt='' title='Despues'>
            <a href='mas?opciones=si'>Mas</a>
        </div>

        <div class='content-img'>
            <img class='imgs' src='https://cdn.pixabay.com/photo/2021/02/05/20/38/abstract-5985788_960_720.jpg' alt='' title='Antes'>
            <img class='imgs' src='img/arbusto.jpg' alt='' title='Despues'>
        </div>";

    }
?>

if ($variable == 'segunda') { ?>
    echo"

<div class='contenedor'>
        <div class='content-ti'>
        <h3 class='antesdespues'>Antes</h3>
        <h3 class='antesdespues'>Despues</h3>
        </div>

        <div class='content-img'>
            <img class='imgs' src='https://dsd3rmhotmx78.cloudfront.net/get/g509c78edf384b0686ada6f5f526abb6396b306f3e5a1c998cc47a0be7d895a8eb28ee5c38b6a84a074e8117e155b9d69_640.jpg' alt='' title='Antes'>
            <img class='imgs' src='img/robotnuevo.jpg' alt='' title='Despues'>
        </div>

        <div class='content-img'>
            <img class='imgs' src='https://cdn.pixabay.com/photo/2021/02/05/20/38/abstract-5985788_960_720.jpg' alt='' title='Antes'>
            <img class='imgs' src='img/arbusto.jpg' alt='' title='Despues'>
        </div>";

    }
?> 
    </body>
    </html>