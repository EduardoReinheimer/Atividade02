<!DOCTYPE html>
<?php
$opcaoUser = $_POST["opcao"];
$opcaoComputador = rand(1, 3);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokenpo</title>
</head>

<body>
    <?php
    include "menu.php";
    ?>
    <form action="" method="post">
        <br>
        <ul>
            <li>
                <input type="radio" name="opcao" value="1">
                <label for="1">Pedra</label>
            </li>
            <li>
                <input type="radio" name="opcao" value="2">
                <label for="2">Papel</label>
            </li>
            <li>
                <input type="radio" name="opcao" value="3">
                <label for="3">Tesoura</label>
            </li>
        </ul>


        <br>
        <input type="submit" value="Jogar">
    </form>

    <?php
    echo "<img src='img/jokenpo/$opcaoUser.png'> x <img src='img/jokenpo/$opcaoComputador.png'>";
    ?>

    <?php
    $message = "";

    if ($opcaoComputador == $opcaoUser) {
        $message = "Empate";
    } else {
        if ($opcaoUser == 1) {
            $message = $opcaoComputador  == 3 ?
                "Vitória do usuário" :
                "Vitória do Computador";
        } else if ($opcaoUser == 2){
            $message = $opcaoComputador  == 1 ?
                "Vitória do usuário" :
                "Vitória do Computador";
        } else if ($opcaoUser == 3){
            $message = $opcaoComputador  == 2 ?
                "Vitória do usuário" :
                "Vitória do Computador";
        }
    }
    echo "<h1>$message</h1>";

    ?>
</body>

</html>