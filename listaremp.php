


        <?php
        include 'conexion.php';
        /*
        $host="198.27.83.229";
        $port=3306;
        $socket="";
        $user="mobilpym_admin";
        $password="admin2016";
        $dbname="mobilpym_bdd";
*/
        $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
        
        $query = "SELECT sappnombres, saapapellidos, sapptipodocumento, sappnumerodocumento, sappentidadgenero, sappciudadania, sappentidadtotalcargas FROM mobilpym_bdd.sappentidad order by idsaapentidad desc";
        if ($stmt = $con->prepare($query)) {
            $stmt->execute();
            $stmt->bind_result($field1, $field2, $field3, $field4, $field5, $field6, $field7);
            echo '<div class="panel panel-default">';
            echo '<div class="panel-heading">Registro de Informaci&oacute;n de Empleados G4S</div>';
            echo '<div class="panel-body">';
            echo '<p>Informacion B&aacute;sica y n&uacute;mero cargas familiares</p>';
            echo '</div>';
            echo '<div class="table-responsive">';
            echo '<table class="table table-bordered">';
             echo '<caption>An&aacute;lisis de visitantes</caption>';
             echo '<tr class="success"><td>Nombres</td><td>Apellidos</td><td>Tipo documento</td><td>N&uacute;mero documento</td><td>G&eacute;nero</td><td>Nacionalidad</td><td>Cargas familiares</td></tr>';
            while ($stmt->fetch()) {
                  echo '<tr style="background-color:#f1f1f1">';
                  echo '<td>'.$field1.'</td>';
                   echo '<td>'.$field2.'</td>';
                    echo '<td>'.$field3.'</td>';
                    echo '<td>'.$field4.'</td>';
                    echo '<td>'.$field5.'</td>';
                    echo '<td>'.$field6.'</td>';
                    echo '<td>'.$field7.'</td>';
                    
               
                 echo "</tr>";
            }    
             echo '</table>';
             echo '</div>';
             echo '</div>';
            $stmt->close();
           
        }
?>
