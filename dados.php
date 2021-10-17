<!DOCTYPE html>
<?php
$dado1user = rand(1, 6);
$dado2user = rand(1, 6);
$dado1computador = rand(1, 6);
$dado2computador = rand(1, 6);
$resultadoUser = $dado1user + $dado2user;
$resultadoComputador = $dado1computador + $dado2computador;
?>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Dados</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <form action="" method="post">
        <input type="submit" value="Lançar Dados">
    </form>

    <div>
        <h1>Usuário</h1>
        <?php
        echo "
                <img src='img/dados/$dado1user.png'>
                +
                <img src='img/dados/$dado2user.png'>
        ";
        ?>
        <p>
            <?php
            echo "$dado1user + $dado2user = $resultadoUser";
            ?>
        </p>
    </div>


    <div>
        <h1>Computador</h1>
        <?php
        echo "
            <img src='img/dados/$dado1computador.png'>
            +
            <img src='img/dados/$dado2computador.png'>
        ";
        ?>
        <p>
            <?php
            echo "$dado1computador + $dado2computador = $resultadoComputador";
            ?>
        </p>
    </div>

    <div>
        <?php 
            $message;
            if($resultadoComputador > $resultadoUser){
                $message = 'Vitória do computador';
            } else if ($resultadoComputador < $resultadoUser){
                $message = 'Vitória do Usuário';
            } else {
                $message = "Empate";
            }
            echo "<h1>$message</h1>";
         ?>
    </div>



</body>

</html>