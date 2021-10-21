<!DOCTYPE html>
<?php
$numUser = isset($_POST["numUser"]) ? $_POST["numUser"] : 0;
$numComputador = rand(0, 10);
$resultado = $numComputador + $numUser;

function displayHands($num)
{
    if ($num > 5) {
        echo "<img src='img/hands/5.png'>";
        $num -= 5;
        echo "<img src='img/hands/$num.png'>";
    } else {
        echo "<img src='img/hands/$num.png'>";
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>

<body>

    <?php
    include "menu.php";
    ?>
    <form action="" method="post">
        Número: <input type="number" name="numUser" min="0" max="10" required>
        <br>
        <ul>
            <li>
                <input type="radio" name="modo" value="par" checked>
                <label for="par">Par</label>
            </li>
            <li>
                <input type="radio" name="modo" value="impar">
                <label for="impar">Ímpar</label>
            </li>
        </ul>


        <br>
        <input type="submit" value="Jogar">
    </form>
    <?php
    $radioModo = isset($_POST["modo"]) ? $_POST["modo"] : "par";
    $isPar;
    if ($radioModo == "par") {
        $isPar = true;
    } else if ($radioModo == "impar") {
        $isPar = false;
    }

    $victory;
    if ($isPar) {
        $victory = $resultado % 2 == 0;
    } else {
        $victory = $resultado % 2 != 0;
    }

    echo "<h1>Número Usuário: $numUser</h1>";
    displayHands($numUser);
    echo "<h1>Número Computador: $numComputador</h1>";
    displayHands($numComputador);
    if ($victory) {
        echo "<h1>Vitória</h1>";
    } else {
        echo "<h1>Você perdeu</h1>";
    }
    ?>

</body>

</html>