<?php
if(isset($_SESSION['uid']))
{
  include "connect.php";

  $result = mysqli_query($conexao, "SELECT * from usuarios where user_id = ".$_SESSION['uid']) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
  if($result){
      while($row = mysqli_fetch_array($result) ){
         echo $row["user_id"]." <br> ".$row["name"]." <br> ".$row["email"]." <br> ".$row["sexo"]."<br>";
      }
  }

  mysqli_close($conexao);
  return $result;
}
else {
  {
    echo "you shall not pass";
  }
}
?>
