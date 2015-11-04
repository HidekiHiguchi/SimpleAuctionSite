<?php
  include "connect.php";

  $resultado = mysqli_query($conexao, "SELECT * from usuarios") or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
  if($resultado){
      while($row = mysqli_fetch_array($resultado) ){
         echo $row["user_id"]." - ".$row["name"]." - ".$row["email"]." - ".$row["sexo"]."<br>";
      }
  }
  mysqli_close($conexao);
?>
