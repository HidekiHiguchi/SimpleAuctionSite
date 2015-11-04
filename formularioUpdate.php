<?php include 'scripts/formScriptUpdate.php';?>

<form name="frm" method="post" action="connection/update.php">
  <table>
    <tr>
     <th>ID</th>
     <td><input type="text" name="user_id" id="user_id"></td>
    </tr>
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
    <td colspan="2"><input type="submit" value="Atualizar" onclick="checkValue()"></td>
   </tr>
  </table>
 </form>
