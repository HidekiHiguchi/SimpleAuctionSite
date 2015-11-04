<?php
  include "connect.php";

  $user_id = $_POST["user_id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $sexo = $_POST["sexo"];

  $query = "UPDATE usuarios SET name='".$name."', password='".$password."', email='".$email."', sexo='".$sexo."' where '".$user_id."'=user_id ";


  $result = mysqli_query($conexao,$query);


  if($result === TRUE){
	echo "<br/>Usuário atualizado com sucesso!";
  } else {
        echo "<br/>Erro na atualização!";
  }
  mysqli_close($conexao);
?>
