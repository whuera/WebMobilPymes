
  <script>
function cargarPagina2(pagina)
{
    $("#contenedor").load(pagina);
}
</script>
        <?php
        include 'conexion.php';
        /*
        $host="198.27.83.229";
        $port=3306;
        $socket="";
        $user="mobilpym_admin";
        $password="admin2016";
        $dbname="mobilpym_bdd";

        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
        */
        $subs_login = trim($_POST['login']);
        $query = "SELECT login , password, emp FROM mobilpym_bdd.usuariosmp WHERE usuariosmp.login = '".$subs_login."'";
      //  $query = "SELECT firstname, lastname, email FROM mobilpym_bdd.visitantes order by id desc";
        $numResults = mysql_num_rows($query);
        
       

        
        
        
        $url = "'tickets.html'";
        if ($stmt = $con->prepare($query)) {
            $stmt->execute();
            $stmt->bind_result($field1, $field2, $field3);
          echo '<div class="col-sm-8 text-left imgdiv" id="contenedor">'; 
            if ($stmt->fetch()) {
                echo '<div  class="alert alert-success" role="alert">Estimad@ '.$subs_login.' '.$result1.' ha ingresado correctamente.</div>';               
                echo '<button type="submit" class="btn btn-success" onclick="javascript:cargarPagina2('.$url.');">Abrir Tickets</button>';
   
            }  else{
                echo '<div  class="alert alert-error" role="alert">Estimad@ '.$subs_login.' '.$subs_password.' '.$subs_emp.' '.$result1.' acceso no autorizado.</div>';

            }
            
           echo '</div>';
           
            $stmt->close();
           
        }
?>
