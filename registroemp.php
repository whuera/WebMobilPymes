<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $("#msgalert").fadeOut(1500);
    },3000);
});
</script>
<?php
include 'conexion.php';

 
$con = mysql_connect($host,$user,$password)
 or die ('Could not connect to the database server' . mysql_connect_error());
//variables
$subs_nombres = $_POST['nombres'];
$subs_apellidos = $_POST['apellidos'];
$subs_tipodocumento = $_POST['tipodocumento'];
$subs_numerodocumento = $_POST['numerodocumento'];
$subs_genero = $_POST['genero'];
$subs_nacionalidad = $_POST['nacionalidad'];
$subs_totalcargas = $_POST['totalcargas'];

//statement sql
$query = "INSERT INTO mobilpym_bdd.sappentidad (sappnombres, saapapellidos, sapptipodocumento, sappnumerodocumento, sappentidadgenero, sappciudadania, sappentidadtotalcargas, sapptipoempleado_idsapptipoempleado, sappperfiles_idsappperfiles, sappperfiles_sappacceso_idsappacceso, sappbussinessemp_idsappbussinessemp) VALUES('$subs_nombres','$subs_apellidos','$subs_tipodocumento','$subs_numerodocumento','$subs_genero','$subs_nacionalidad','$subs_totalcargas','1','1','10','1')";
$retry_value = mysql_query($query, $con);
if (!$retry_value) {
  // die('Error: ' . mysql_error());
    //echo 'Error intente de nuevo';
   
    echo '<div id="msgalert" class="alert alert-warning" role="alert">Error al intentar grabar el registro intente de nuevo o verifique los datos.</div>';
}
else{	
    echo '<div id="msgalert" class="alert alert-success" role="alert">Estimad@ '.$subs_nombres.' '.$subs_apellidos.' se ha registrado correctamente, pronto nos pondremos en contacto con usted.</div>';

}
mysql_close($con);


?>

