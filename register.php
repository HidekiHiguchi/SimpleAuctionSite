<?php include 'includes/siteUp.php';?>
<!-- all content bellow-->

<?php include 'formulario.php';?>
<br>

<h1> CRUD da segunda entrega quando não havia SESSION nem COOKIE  <h1><br>
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
