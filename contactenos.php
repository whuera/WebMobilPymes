
<script type="text/javascript">
function submitform()
{
   $("#contenedor").load('registro.php');
  document.myform.submit();
   
}
</script>


<script>
function ajaxSubmit()
{
var firstname=document.getElementById('nombres').value;
var lastname=document.getElementById('apellidos').value;
var email=document.getElementById('email').value;
var dataString='firstname='+firstname+'&lastname='+lastname+'&email='+email;
$.ajax({
type:"POST",
url:"registro.php",
data:dataString,
cache:false,
success:function(html){
$('#msg').html(html);
document.getElementById("myform").reset();
}
});
return false;
}
</script>




<br>
<!--form name="myform" action="registro.php" method="POST"-->
    <form id="myform">
<div class="panel panel-default"  style="opacity: 0.8;">
  <div class="panel-heading">
    <h1 class="panel-title">Formulario de Contacto</h1>
  </div>
  <div class="panel-body">
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Nombres</span>
  <input id="nombres" name="nombres" type="text" class="form-control" placeholder="Juan" aria-describedby="basic-addon1">
</div>
<br>
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Apellidos</span>
  <input id="apellidos" name="apellidos" type="text" class="form-control" placeholder="Perez" aria-describedby="basic-addon1">
</div>
<br>
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Correo electr&oacute;nico</span>
  <input id="email" name="email" type="text" class="form-control" placeholder="email@mail.com" aria-describedby="basic-addon1">
</div>
<br>
<div class="btn-group" role="group" aria-label="...">
    <button type="submit" class="btn btn-success" onclick="return ajaxSubmit();">Registrarse</button>

</div>

  </div>
</div>
</form>
<p id="msg"></p>
<?php
/*
if(isset($_POST['submit'])){
    requiere("registro.php");
}
 
 */
?>

<br>
<div class="panel panel-default"  style="opacity: 0.8;">
  <div class="panel-heading">
    <h1 class="panel-title">Ubicaci&oacute;n de nuestras oficinas</h1>
  </div>
  <div class="panel-body">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6710.016383879851!2d-78.4941410535372!3d-0.17545680973924666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbussinesflex+quito!5e0!3m2!1sen!2ses!4v1467408070644" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
