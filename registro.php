
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $("#msgalert").fadeOut(1500);
    },3000);
});
</script>
<?php

include 'conexion.php';
include 'sitefunctions.php';

 
$con = mysql_connect($host,$user,$password)
 or die ('Could not connect to the database server' . mysql_connect_error());
 //echo $con;
$subs_name = $_POST['firstname'];
$subs_last = $_POST['lastname'];
$subs_email = $_POST['email'];
//echo "<script type='text/javascript'>window.parent.location.reload()</script>";
  
   $insert_value = 'INSERT INTO `' . $mobilpym_bdd.visitantes.'` (`firstname` , `lastname` , `email`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '")';
$query = "INSERT INTO mobilpym_bdd.visitantes (firstname, lastname, email) VALUES('$subs_name','$subs_last','$subs_email')";
//$resultado=mysql_query("SELECT mail FROM mobilpym_bdd.visitantes WHERE mobilpym_bdd.email = '".$subs_email."'", $con);
//$resultado=mysql_query($query,$con);
$retry_value = mysql_query($query, $con);
//echo $retry_value;
//echo 'Se ha registrado con exito';
if (!$retry_value) {
  // die('Error: ' . mysql_error());
    echo 'Error intente de nuevo';
}
else{	
//exit(header("Location: /Success.html"));
//movePage(301,"http://www.mobilpymes.com/Success.html");
    echo '<div id="msgalert" class="alert alert-success" role="alert">Estimad@ '.$subs_name.' '.$subs_last.' se ha registrado correctamente, pronto nos pondremos en contacto con usted.</div>';

}
mysql_close($con);
/* 
if (mysql_num_rows($resultado)>0)
{
 
header('Location: Fail.html');
 
} else {
	
	$insert_value = 'INSERT INTO `' . $mobilpym_bdd.visitantes.'` (`firstname` , `lastname` , `email`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '")';
 
mysql_select_db($db_name, $con);
$retry_value = mysql_query($insert_value, $con);
 
if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: Success.html');
}
 
mysql_close($con);
*/
?>
