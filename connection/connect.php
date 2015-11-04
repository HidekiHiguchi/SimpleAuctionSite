<?php
  // abrir conexao e selecionar o banco de dados
  // CONFERIR A PORTA ABERTA PARA MYSQL NO MACKENZIE
  //$conexao = mysqli_connect("localhost:3308","root","","tecweb2"); // mackenzie only

  $conexao = mysqli_connect("localhost","root","root","site");

  // tratamento de erros
  if (mysqli_connect_errno())
  {
      echo "Não foi possível conectar AO BANCO: " . mysqli_connect_error();
  }
?>
