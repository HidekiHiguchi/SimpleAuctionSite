<?php
  include "connect.php";

  $result = mysqli_query($conexao, "SELECT * from usuarios") or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
  if($result){
      while($row = mysqli_fetch_array($result) ){
         echo $row["user_id"]." - ".$row["name"]." - ".$row["email"]." - ".$row["sexo"]."<br>";
      }
  }

  mysqli_close($conexao);
  return $result;

?>
