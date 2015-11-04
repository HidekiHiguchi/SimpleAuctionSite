<?php
  include "connect.php";

  $lastName = $_POST["lastName"];
  $name = $_POST["name"]." ".$lastName;
  $email = $_POST["email"];
  $password = $_POST["password"];
  $sexo = $_POST["sexo"];

  $query = "INSERT INTO usuarios(name, password, email, sexo) VALUES ('$name','$password','$email','$sexo')";

  $resultado = mysqli_query($conexao, $query) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

  if($resultado === TRUE){
	echo "<br/>Usuário inserido com sucesso!";
  } else {
        echo "<br/>Erro na inserção!";
  }
 mysqli_close($conexao);
?>
