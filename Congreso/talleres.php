<?php 
    $page_titulo = "Talleres";
    include("inc/header1.inc.html");
?>

<main class="container">
    
     <div class="page-header">
            <h1 class="text-center">
              <span class="wow flipInX">
                TALLERES
              </span>
            </h1>
    </div>
    
    <table class="table">
              <thead>
                <tr>
                  <th>Horario</th>
                  <th>Lugar</th>
                  <th>Título</th>
                  <th>Descripción</th>
                </tr>
              </thead>
              <tbody>
                
                <?php 
                require('inc/conexion-BD.inc.php');
                
                $q = "SELECT DATE_FORMAT(fecha-hora,'D/m/y H:i:s') AS fht, lugar, titulo, descripcion FROM Taller ORDER BY fht ASC";
                
                $res = mysqli_query($dbc, $q);
                
                if($res){
                    while($registro = mysqli_fetch_array($res)){
                        echo '<tr class="active">
                             <td>'. $registro['fht'] .'</td>
                             <td>'. $registro['lugar'] .'</td>
                             <td>'. $registro['titulo'] .'</td>
                             <td>'. $registro['descripcion'] .'</td>'
                             . '</tr><br />';
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
