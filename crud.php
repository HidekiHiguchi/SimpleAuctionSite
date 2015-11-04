<?php

    $opcao = $_POST["crud1"];
    echo $opcao;
    switch($opcao)
    {
        case "C":
        include 'formulario.php';
        break;

        case "R":
        include 'connection/read.php';
        break;

        case "U":
        include 'formularioUpdate.php';
        break;

        case "D":
        $formD = "
        <form action='connection/delete.php' method='post'>
          <input type='text' name='user_id' id='user_id'>
          <input type='submit' name='delete' >
        </form>
        ";
        echo $formD;
        break;
    }

?>
