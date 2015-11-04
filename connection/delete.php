<?php
  include "connect.php";

  $user_id = $_POST['user_id'];

  $result = mysqli_query($conexao, "DELETE FROM usuarios WHERE user_id=".$user_id) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

  if($result === TRUE){
	echo "<br/>Usuário removido com sucesso!";
  } else {
        echo "<br/>Erro na remoção!";
  }
  mysqli_close($conexao);
?>
