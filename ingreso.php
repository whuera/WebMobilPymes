
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
var login=document.getElementById('login').value;
var password=document.getElementById('password').value;
var emp=document.getElementById('sel1').value;
var dataString='login='+login+'&password='+password+'&emp='+emp;
$.ajax({
type:"POST",
url:"accesoclientes.php",
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
<div class="panel panel-default"  style="opacity: 0.8; width: 60%">
  <div class="panel-heading">
      <h1 class="panel-title">Credenciales de acceso a clientes</h1>
  </div>
  <div class="panel-body">
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Login</span>
  <input id="login" name="login" type="text" class="form-control" placeholder="usuario" aria-describedby="basic-addon1">
</div>
<br>
    <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Password</span>
  <input id="password" name="password" type="password" class="form-control" placeholder="*****" aria-describedby="basic-addon1">
</div>
<br>
    <div class="input-group">
  <label for="sel1">Seleccione la empresa:</label>
      <select class="form-control" id="sel1">
          <option value='aireec'>AireEc</option>
        <option value='servi'>Servicauchos</option>
        <option value='golden'>GoldenMinds</option>
        <option value='aero'>AeroSeguro</option>
      </select>
</div>
<br>
<div class="btn-group" role="group" aria-label="...">
    <button type="submit" class="btn btn-success" onclick="return ajaxSubmit();">Ingresar</button>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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
<!--
<div class="panel panel-default"  style="opacity: 0.8; height: 300px; width: 60%">
  <div class="panel-heading">
    <h1 class="panel-title">Ubicaci&oacute;n de nuestras oficinas</h1>
  </div>
  <div class="panel-body" style="height: 300px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6710.016383879851!2d-78.4941410535372!3d-0.17545680973924666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbussinesflex+quito!5e0!3m2!1sen!2ses!4v1467408070644" width="600" height="240" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
-->
