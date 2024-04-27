<?php
require_once("Aldeano.php");
require_once("Arbusto.php");


$Aldeano1 = new Aldeano ($leer);
$Arbusto1 = new Arbusto();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="centrado">
    <div class="container">
    <div class="row sprites">
        <div class="arbusto col">
            <img src="img/Arbusto.png" alt="Arbusto imagen" class="arbustoimg">
            <button class="recolectar">Recolectar</button>
        </div>
        <div class="aldeano col">
            <img src="img/spritealdeano.png" alt="Aldeano Imagen">
            <div class="datosaldeano">
            <?php
            
            echo "<p class=velrecoleccion> Vel. Recoleccion: <br>" . $Aldeano1->velocidadrecoleccion . "</p>";
            echo "<p class=nombrealdeano> Nombre: <br>" . $Aldeano1->nombre . "</p>";

            $Aldeano1->recolectar($Arbusto1);

            ?>
            </div>


        </div>
        <div class="arbusto col">
            <img src="img/Arbusto.png" alt="Arbusto imagen" class="arbustoimg">
            <button>Recolectar</button>
        </div>
    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

