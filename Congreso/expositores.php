 <?php 
    $page_titulo = "Invitados";
    include("inc/header1.inc.html");
?>

<main class="container">
    
    <div class="page-header">
            <h1 class="text-center">
              <span class="wow flipInX">
                EXPOSITORES
              </span>
            </h1>
    </div>
    
    <table class="table">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Curriculum</th>
                </tr>
              </thead>
              <tbody>
                <tr class="active">
                  <td>Titulo 1</td>
                  <td>Descripción 1</td>
                </tr>
                <tr class="success">
                  <td>Titulo 2</td>
                  <td>Descripción 2</td>
                </tr>
                <tr class="active">
                  <td>Titulo 3</td>
                  <td>Descripción 3</td>
                </tr>
                <tr class="success">
                  <td>Titulo 4</td>
                  <td>Descripción 4</td>
                </tr>
              </tbody>
    </table>
</main>

<?php 
    include("inc/footer1.inc.html");
?>