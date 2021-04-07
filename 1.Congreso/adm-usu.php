 <?php 
    $page_titulo = "Administrar Usuarios";
    include("inc/header2.inc.html");
?>

<main class="container">
    
     <div class="page-header">
            <h1 class="text-center">
              <span class="wow flipInX">
                Usuarios Registrados
              </span>
            </h1>
    </div>
    
    <table class="table">
              <thead>
                <tr>
                    <th>Identificador</th>
                  <th>Nombre completo</th>
                  <th>Email</th>
                  <th>Teléfono</th>
                  <th>Fecha de nacimiento</th>
                  <th>Escuela de procedencia</th>
                  <th>Tipo de usuario</th>
                  <th>Fecha de registro</th>
                </tr>
              </thead>
              <tbody>
                
                <?php 
                require('inc/conexion-BD.inc.php');
                
                $q = "SELECT  * FROM Participante";
                
                $res = mysqli_query($dbc, $q);
                
                if($res){
                    while($registro = mysqli_fetch_array($res)){
                        echo '<tr class="active">
                            <td> '. $registro['id-participante'].'</td>
                             <td>'. $registro['nombre'] .' '.$registro['ape-paterno'] .' '.$registro['ape-materno'] .'</td>
                             <td>'. $registro['email'] .'</td>
                             <td>'. $registro['telefono'] .'</td>
                             <td>'. $registro['nacimiento'] .'</td>
                             <td>'. $registro['escuela'] .'</td>
                             <td>'. $registro['tipo'] .'</td>
                             <td>'. $registro['tiempo-registro'] .'</td>'
                              .'</tr><br />';
                    }
                    
                    echo '</tbody></table>';
                    mysqli_free_result($res);
                }
                else{
                    echo '<p> Lo sentimos la pagina ha tenido un inconveniente</p> <br />';	
                    echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p> <br/ ></main>';
                }
                
                mysqli_close($dbc);
                ?>  
                  
            

</main>

<?php 
    include("inc/footer1.inc.html");
?> 

