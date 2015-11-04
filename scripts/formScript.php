<script type="text/javascript">
 function checkValue() {

 var username = document.frm.name.value;
 var sobre = document.frm.lastName.value;
 var senha = document.frm.senha.value;
 var confirmar = document.frm.confirmarSenha.value;
 var useremail = document.frm.email.value;

 console.log(username);
 console.log(senha);
 console.log(confirmar);
 console.log(useremail);
 console.log(sobre);

 //유효성검사
 if(username == '') {
  alert("Preenche o nome corretamente.");
  document.frm.nome.focus();
  return; // 반환후 중지
 }
 if(sobre == '') {
  alert("Preenche o sobrenome corretamente.");
  document.frm.sobrenome.focus();
  return; // 반환후 중지
 }
 if(senha == ''){
  alert("Preenche a senha corretamente.");
  document.frm.senha.focus();
  return;
 }
 if(confirmar == ''){
  alert("Confirmar a senha.");
  document.frm.confirmarSenha.focus();
  return;
 }
 if(useremail == ''){
  alert("Preenche email corretamente.");
  document.frm.email.focus();
  return;
 }
 // 비밀번호 일치 여부
 if(senha != confirmar){
  alert("A senha nao e igual.");
  document.frm.senha.value = '';
  document.frm.confirmarSenha.value = '';
  document.frm.senha.focus();
  return;
 }
 // 이메일 형식
 if(useremail.indexOf('@') < 1)
 {
  alert("Preenche.");
  document.frm.email.value = '';
  document.frm.email.focus();
  return;
 }
 // 올바른 양식이 입력된 것을 확인했다.
 // 현재 양식을 다른 페이지로 제출(값 전달)

 document.frm.action="connection/welcome.php";
 document.frm.method="post";
 document.frm.submit();
}
</script>
