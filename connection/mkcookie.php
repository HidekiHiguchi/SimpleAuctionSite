
<?php

include "connect.php";
$emaill = $_POST['userc'];

$result = mysqli_query($conexao, "SELECT name,email,password from usuarios where email='$emaill'") or die("error ".mysqli_error($conexao));

if($result){
    while($row = mysqli_fetch_array($result) ){

        if($row["password"] == $_POST["pass"]) {
          setcookie("user", $_POST['userc'], time() + (86400 * 30), "/"); // 86400 = 1 day
          header("Location: http://localhost/SimpleAuctionSite/");
          exit;
        }
    }
}

echo "not in";

?>
