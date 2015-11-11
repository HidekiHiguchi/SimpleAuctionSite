<?php

  $conexao = @mysqli_connect("localhost","root","","tecWeb2"); //home only  (se usar @ esconde erros)

  if(mysqli_connect_errno())
    $conexao = mysqli_connect("localhost:3308","root","","tecweb2") or die("\n Checkar aquivo connection/connect.php\n"); // mackenzie only


?>
