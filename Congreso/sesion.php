<?php 
    $page_titulo = "Sesion";
    include("inc/header1.inc.html");
?>

<main class="container">
    <div class="login-bg">
        <div class="container">
            <div class="form-wrapper">
            <form class="form-signin wow fadeInUp" action="">
            <h2 class="form-signin-heading"> Inicia Sesión</h2>
            <div class="login-wrap">
                <input type="email" class="form-control" placeholder="Email" autofocus>
                <input type="password" class="form-control" placeholder="Contraseña">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Recordar sesión.
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> ¿Olvidaste tu contraseña?</a>

                    </span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit">Iniciar</button>
                
                <div class="registration">
                    No tienes una cuenta.
                    <a class="" href="registro.php">
                        Registrate.
                    </a>
                </div>

            </div>

              <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Forgot Password ?</h4>
                          </div>
                          <div class="modal-body">
                              <p>Enter your e-mail address below to reset your password.</p>
                              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <button class="btn btn-success" type="button">Submit</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- modal -->

          </form>
          </div>
        </div>
    </div>

</main>

<?php 
    include("inc/footer1.inc.html");
?> 
