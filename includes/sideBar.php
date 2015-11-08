<div class="sidebar">

  <?php
  if(!isset($_COOKIE['user'])) {
    include 'includes/login.php';
  } else {

      echo "Welcome ". $_COOKIE['user'];
  }
  ?>


</div>
