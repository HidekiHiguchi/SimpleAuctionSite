<?php
  // criar Connection

  $conexao = mysqli_connect("localhost:3308","root","","tecweb2"); // mackenzie only
  //$conexao = mysqli_connect("localhost","root","","tecWeb2"); //home only

  if (mysqli_connect_errno())
  {
      echo "Não foi possível conectar AO BANCO: " . mysqli_connect_error();
  }
?>
