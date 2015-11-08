
<?php include 'includes/siteUp.php';?>
<!-- all content bellow-->


  <?php
  if(!isset($_COOKIE['user'])) {
    include 'includes/login.php';
  } else {

      echo "Welcome ". $_COOKIE['user'];
  }
  ?>


<!-- content end here -->
<?php include 'includes/siteDown.php';?>
