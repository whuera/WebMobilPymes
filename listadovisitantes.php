


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
        $query = "SELECT firstname, lastname, email FROM mobilpym_bdd.visitantes order by id desc";
        if ($stmt = $con->prepare($query)) {
            $stmt->execute();
            $stmt->bind_result($field1, $field2, $field3);
            echo '<div class="panel panel-default">';
            echo '<div class="panel-heading">Visitantes del sitio</div>';
            echo '<div class="panel-body">';
            echo '<p>Visitantes registrados dentro del App Movil</p>';
            echo '</div>';
            echo '<div class="table-responsive">';
            echo '<table class="table table-bordered">';
             echo '<caption>An&aacute;lisis de visitantes</caption>';
            while ($stmt->fetch()) {
                  echo '<tr style="background-color:#f1f1f1">';
                  echo '<td>'.$field1.'</td>';
                   echo '<td>'.$field2.'</td>';
                    echo '<td>'.$field3.'</td>';
               
                 echo "</tr>";
            }    
             echo '</table>';
             echo '</div>';
             echo '</div>';
            $stmt->close();
           
        }
?>
