<?php include 'includes/siteUp.php';?>
<!-- all content bellow-->
<h1> Verificar usuario e senha para acessar o banco no mackenzie em: connection/connect.php<h1>
<?php include 'formulario.php';?>
<br>
<h3>CRUD de Usuario</h3>
<form action="crud.php" method="post">
  <input type="radio" name="crud1" value="C" checked="checked" id="C">  C<br>
  <input type="radio" name="crud1" value="R" id="R">  R<br>
  <input type="radio" name="crud1" value="U" id="U">  U<br>
  <input type="radio" name="crud1" value="D" id="D">  D<br>
  <br>
  <input type="submit" >
</form>
<!-- content end here -->
<?php include 'includes/siteDown.php';?>
