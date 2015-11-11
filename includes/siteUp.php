
<?php include 'includes/upper.php';?>
    <div id="site_content">
      <!-- include sidabar here -->

      <div id="content">
        <?php
        if(isset($_COOKIE['user']))
          $_SESSION['userS'] = $_COOKIE['user']; // se já existir cookie ele passa para a Session


        if(!isset($_SESSION['userS'])) // se usuario estiver logado mostra a barra dele, se não estver
          include 'includes/login.php';
        else
          include 'includes/userToolBar.php';

        //?>
