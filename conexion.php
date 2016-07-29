<?php
$host="198.27.83.229";
$port=3306;
$socket="";
$user="mobilpym_admin";
$password="admin2016";
$dbname="mobilpym_bdd";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
?>

