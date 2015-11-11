<?php include 'includes/siteUp.php';?>
<!-- all content bellow-->

<form name="frm" method="post" action="connection/updateUser.php">
  <table>
   <tr>
    <th>Nome</th>
    <td><input type="text" name="name" id="name"></td>
   </tr>

   <tr>
   <tr>
    <th>E-mail</th>
    <td><input type="text" name="email" id="email"></td>
   </tr>
   <tr>
   <tr>
    <th>Senha</th>
    <td><input type="password" name="password" id="senha"></td>
   </tr>
   <tr>
    <th>Confirmar senha</th>
    <td><input type="password" name="confirmarSenha" id="confirmarSenha" ></td>
   </tr>
   <th>Sexo:</th>
                <td>
                    <input type="radio" name="sexo" value="masculino" checked="checked">Masculino
                    <input type="radio" name="sexo" value="feminino">Feminino
                </td>
    <td colspan="2"><input type="submit"></td>
   </tr>
  </table>
 </form>

<!-- content end here -->
<?php include 'includes/siteDown.php';?>
