<?php
  session_start();
  include "connect.php";

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $sexo = $_POST["sexo"];

$query = "UPDATE usuarios SET name='".$name."', password='".$password."', email='".$email."', sexo='".$sexo."' where '"."user_id"."'= ".$_SESSION['uid'];

  $result = mysqli_query($conexao,$query);


  if($result === TRUE){
	echo "<br/>Usuário atualizado com sucesso!";
  } else {
        echo "<br/>Erro na atualização!";
  }
  mysqli_close($conexao);
?>
