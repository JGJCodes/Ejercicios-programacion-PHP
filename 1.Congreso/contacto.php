 <?php 
    $page_titulo = "Contacto";
    include("inc/header1.inc.html");
?>

<main class="container">
    
    <div class="page-header">
            <h1 class="text-center">
              <span class="wow flipInX">
                CONTACTANOS
              </span>
            </h1>
    </div>
    
    <div class="row">
        <div class="col-lg-5 col-sm-5 address">
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              Dirección.
            </h4>
            <address>
              Av. 1o. de Mayo esq. Sor Juana Inés de la Cruz. 
              <br />Col. Los Mangos C.P.89440.
            </address>
          </section>
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              Horario de oficina
            </h4>
            <p>
              Lunes - Viernes 9am - 4pm
              <br>
              Sabado y Domingo cerramos.
            </p>
          </section>
          <section class="contact-infos">
            <h4>
              Teléfono
            </h4>
            <p>
              <i class="icon-phone">
              </i>
              01 (833) 357-48-20
            </p>

          </section>
          
          <section class="contact-infos">
            <h4>
              Email
            </h4>
            <p>
              <i class="icon-phone">
              </i>
                <a> se.imiq@itcm.edu.mx</a>
            </p>

          </section>
        </div>
        <div class="col-lg-7 col-sm-7 address">
          <h4>
            Si tienes alguna duda o comentario contactanos por medio de un mensaje.
          </h4>
          <div class="contact-form">
            
          <?php 
          if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
            $nombre = trim($_POST["nombre"]); 
            $email = trim($_POST["email"]); 
            $telefono = trim($_POST["telefono"]); 
            $mensaje = trim($_POST["mensaje"]); 
            
            $errores = array(); 

            if($nombre == "" or $email =="" or $telefono == "" or $mensaje == ""){ 
                $errores[] = "Debes completar todos los campos"; 
            }
            
            if(!filter_var($email,FILTER_VALIDATE_EMAIL )){ 
                $errores[] = "El email no es valido"; 
            } 
            
            if(!ereg("^[0-9]{0,10}$", $telefono)){
               $errores[] = "El teléfono debe constar de puros números y tener 10 caracteres.";
            }
            
            if(!ereg("^[a-zA-Z]{3,70}$", $nombre)){ 
                $errores[] = "El nombre no debe de incluir números y exceder de 70 caracteres"; 
            }
            
            if(empty($errores)){  
            
                $destino = "playerjgj@gmail.com";
                $asunto = "Sugerencias y dudas";
               //para el envío en formato HTML 
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

                //dirección del remitente 
                $headers .= "From: ".$nombre. " <" . $email . "> <" . $telefono . ">\r\n"; 
	
                mail($destino,$asunto,$mensaje,$headers);
                
                echo "<h1>Tu mensaje ha sido enviado</h1> <br /> <p>Gracias por contactarnos. Te enviaremos una respuesta lo más pronto posible.</p></main><br />";
	
                include('inc/footer1.inc.html');	
                exit();
            
            }
            else{ 
                echo '<br /><br /><br /><h1>¡Errores!</h1> <p > <br />';
                foreach($errores as $msg){	
                    echo "-$msg <br/> \n";
                }
                echo '</p><p>Por favor vuelve a intentarlo.</p><p><br /></p>';
            }   
          }
          ?>    
              
              <form role="form" action="" method="post">
              <div class="form-group">
                <label for="name">
                  Nombre:
                </label>
                  <input type="text" placeholder="" value="<?php echo $nombre; ?>" name="nombre" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">
                  Correo electrónico:
                </label>
                  <input type="email" placeholder="" value="<?php echo $email; ?>" name="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  Teléfono:
                </label>
                  <input type="tel" id="phone" value="<?php echo $telefono; ?>" name="telefono" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  Mensaje:
                </label>
                  <textarea placeholder="" rows="5" name="mensaje" class="form-control">
                </textarea>
              </div>
              <button class="btn btn-info" type="submit">
                Enviar
              </button>
            </form>

          </div>
        </div>
      </div>
    
</main>

<?php 
    include("inc/footer1.inc.html");
?>
