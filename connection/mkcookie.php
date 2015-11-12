<?php
// Start the session
session_start();
?>
<?php

include "connect.php";
$emaill = $_POST['userc'];

$result = mysqli_query($conexao, "SELECT user_id from usuarios where email='$emaill'") or die("error ".mysqli_error($conexao));

if($result){

  while ($idu = mysqli_fetch_array($result)) {
    $_SESSION['uid'] = $idu['user_id'];
    setcookie("userid", $idu['user_id'], time() + (86400 * 30), "/"); // 86400 = 1 dia
  }

  $result = mysqli_query($conexao, "SELECT password from usuarios where email='$emaill'") or die("error ".mysqli_error($conexao));


    while($row = mysqli_fetch_array($result) ){

        if($row["password"] == $_POST["pass"]) {
          if(isset($_POST['keepL'])) {
            setcookie("user", $_POST['userc'], time() + (86400 * 30), "/"); // 86400 = 1 dia
          }

          $_SESSION['userS'] = $_POST["userc"];

          header("Location: ../"); // volta 1 diretorio
          exit;
        }
    }
}

echo "not in";

?>
