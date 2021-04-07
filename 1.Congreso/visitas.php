<?php 
    $page_titulo = "Visitas";
    include("inc/header1.inc.html");
?>

<main class="container">
    
    <div class="page-header">
            <h1 class="text-center">
              <span class="wow flipInX">
                VISITAS INDUSTRIALES
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
                <tr class="active">
                  <td>hh:mm Hrs.<br /> dd/mm/aaaa</td>
                  <td>Ubicación 1</td>
                  <td>Titulo 1</td>
                  <td>Descripción 1</td>
                </tr>
                <tr class="success">
                  <td>hh:mm Hrs.<br /> dd/mm/aaaa</td>
                  <td>Ubicación 2</td>
                  <td>Titulo 2</td>
                  <td>Descripción 2</td>
                </tr>
                <tr class="active">
                  <td>hh:mm Hrs.<br /> dd/mm/aaaa</td>
                  <td>Ubicación 3</td>
                  <td>Titulo 3</td>
                  <td>Descripción 3</td>
                </tr>
                <tr class="success">
                  <td>hh:mm Hrs.<br /> dd/mm/aaaa</td>
                  <td>Ubicación 4</td>
                  <td>Titulo 4</td>
                  <td>Descripción 4</td>
                </tr>
              </tbody>
            </table>

</main>

<?php 
    include("inc/footer1.inc.html");
?> 
