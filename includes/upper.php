<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Simple Auction House</title>
  <meta name="description" content="Simple LightWeight Auction Site" />
  <meta name="Leilão" content="Auction Site, Auction House" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <header>

      <div id="logo">
        <div id="logo_text">
          <!-- cor do logo-->
          <h1><a href="index.html">Leilão<br>Online</a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- "selected deve ficar na home."-->
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="category.php">Categorias</a></li>
          <li><a href="register.php">CRUD + Formulario</a></li>
          <li><a href="contact.php">Contato</a></li>
          <li><a href="about.php">Sobre</a></li>
        </ul>
        <?php if(isset($_SESSION['userS'])) echo "<h6> welcome ".$_SESSION['userS']."</h6>"; //cheap method to display Username(made by myself)?>
      </div>

    </header>
