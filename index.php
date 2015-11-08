<?php include 'includes/siteUp.php';?>
<!-- all content bellow-->

<?php
if(isset($_COOKIE['user']))
  $_SESSION['userS'] = $_COOKIE['user'];


if(!isset($_SESSION['userS']))
  include 'includes/login.php';
else
  echo "welcome: ".$_SESSION['userS'];

?>

<!-- content end here -->
<?php include 'includes/siteDown.php';?>
