<?php


$alert=false;
if(isset($_GET["lunghezza"]) && $_GET["lunghezza"]>= 6){
    $lung = $_GET["lunghezza"];
}
else{
    $alert=true;
    $lung=0;
}

$ripe =1;
if(isset($_GET["ripetizioni"])){
    $ripe = $_GET["ripetizioni"];
}

$letter = isset($_GET["lettere"]);
$num = isset($_GET["numeri"]);
$simb = isset($_GET["simboli"]);

include 'function.php';

$password= passwordGen($lung,$letter,$num,$simb,$ripe);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="container text-white text-center">
        <?php
        if($alert==true){
            echo "<div class='alert alert-danger mt-3' role='alert'>La password deve essere almeno di 6 caratteri</div>";
        }
        ?>
        <h1 class="my-4">Strong password generator</h1>
        <h2 class="mb-3">Genera una password sicura</h2>
        <?php
        echo "<div class='alert alert-info p-1 w-50 fs-5 mx-auto' role='alert'>Password Generata: $password</div>";
        ?>

        <form class="bg-white p-2 radius text-black w-50 m-auto" action="" method="GET">
            <div class="d-flex px-5 justify-content-between mt-2">
                <div class="fs-5">Lunghezza password:</div>
                <input class="me-5" type="text" name="lunghezza" placeholder="Minimo 6 caratteri">
            </div>

            <div class="d-flex px-5 justify-content-between mt-3">
                <div class="fs-5 ">Consenti ripetizioni:</div>

                <div class="w-50 ">
                    <!-- prima checkbox -->
                    <div class="d-flex ms-5">
                        <input class="me-1" type="radio" name="ripetizioni" value="1">
                        <div>si</div>
                    </div>

                    <div class="d-flex ms-5">
                        <input class="me-1" type="radio" name="ripetizioni" value="0">
                        <div>no</div>
                    </div>

                    <!-- seconda checkbox -->
                    <div class="d-flex ms-5 mt-3">
                        <input type="checkbox" name="lettere">
                        <div class="ms-1">Maiuscole</div>
                    </div>

                    <div class="d-flex ms-5">
                        <input type="checkbox" name="numeri">
                        <div class="ms-1">Numeri</div>
                    </div>

                    <div class="d-flex ms-5">
                        <input type="checkbox" name="simboli">
                        <div class="ms-1">Simboli</div>
                    </div>
                </div>

            </div>
            <input class="bg-primary text-white mt-2" type="submit">
            <a class="ms-1" href="index.php">Annulla</a>
        </form>
    </div>
</body>
</html>