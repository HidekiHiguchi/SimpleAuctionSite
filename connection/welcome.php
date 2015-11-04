<?php
  // conctando ao BD
  include "connect.php";

  $name = $_POST["name"];
  $lastName = $_POST["lastName"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $sexo = $_POST["sexo"];

  // executando a operação de SQL
  $resultado = mysqli_query($conexao, "INSERT INTO usuarios(name, lastName, password) VALUES (".$name.",".$lastName.",".$password.")") or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

  if($resultado === TRUE){
	echo "<br/>Usuário inserido com sucesso!";
  } else {
        echo "<br/>Erro na inserção!";
  }
  //fechamento da conexão
 mysqli_close($conexao);
?>
