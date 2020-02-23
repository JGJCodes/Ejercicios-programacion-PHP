<?php 
    $page_titulo = "Registro";
    include("inc/header1.inc.html");
?>

<main class="container">
    <div class="registration-bg">
    <div class="container">
        
<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        $nombres = trim($_POST["nombres"]); 
        $apePaterno = trim($_POST["apePat"]); 
        $apeMaterno = trim($_POST["apeMat"]); 
        $tel = trim($_POST["tel"]); 
        $email = trim($_POST["email"]); 
        $escuela = trim($_POST["instituto"]); 
        $fechaNac = trim($_POST["fechaNac"]);
        $genero = trim($_POST["genero"]);
        $tipoUsu = trim($_POST["tipoUsu"]); 
        $paquete = trim($_POST["paquete"]); 
        $pass1 = trim($_POST["pass1"]); 
        $pass2 = trim($_POST["pass2"]); 

        $errores = array(); 

        if($nombres == "" or $fechaNac =="" or $genero == "" or $tipoUsu == "" or $paquete == "" or $apePaterno == "" or $apeMaterno == "" or $tel == "" or $email == "" or $pass1 == "" or $pass2 == "" or $escuela == ""){ 
            $errores[] = "Debes completar todos los campos"; 
        } 
        
        if(!ereg("^[0-9]{0,10}$", $tel)){
           $errores[] = "El teléfono debe constar de puros números y tener 10 caracteres.";
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL )){ 
            $errores[] = "El email no es valido"; 
        } 

        if($pass1 != $pass2){ 
            $errores[] = "Las contraseñas deben coincidir"; 
        } 

        if(!ereg("^[a-zA-Z]{3,40}$", $nombres)){ 
            $errores[] = "El nombre no debe de incluir números y exceder de 40 caracteres"; 
        }
        
        if(!ereg("^[a-zA-Z]{3,40}$", $apePaterno)){ 
            $errores[] = "El apellido paterno no debe de incluir números y exceder de 20 caracteres"; 
        }
        
        if(!ereg("^[a-zA-Z]{3,40}$", $apeMaterno)){ 
            $errores[] = "El apellido materno no debe de incluir números y exceder de 20 caracteres"; 
        }

        if(empty($errores)){  
            
            require('inc/conexion-BD.inc.php');
            
            $q = "INSERT INTO Participante VALUES ( '',SHA1('$pass1'),'$nombres', '$apePaterno', '$apeMaterno', '$email','$tel', '$fechaNac', '$escuela', '$genero', '$tipoUsu', '$paquete', NOW())";
        
            $r	= mysqli_query($dbc, $q);
            
            $id_part = mysqli_insert_id();
            
            if($r){
                echo "<br/><br/><br/><br/><h1>Registro exitoso.</h1><p>Tu registro ha sido efectivo. Tu número de registro es: ". $id_part . "</p> <br/ ></main>";
            }
            
            else{
                echo '<p> Lo sentimos su registro ha tenido un inconveniente</p> <br />';	
	 	echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p> <br/ ></main>';
	 	 	
	 }	
	
	 mysqli_close($dbc);
	
	 include('inc/footer1.inc.html');	
	 exit();
            
        }
        else{ 
            echo '<br /><br /><br /><h1>¡Errores!</h1> <p > <br />';
            foreach($errores as	$msg){	
	 	 echo	"-$msg <br/> \n";
            }
            echo '</p><p>Por favor vuelve a intentarlo.</p><p><br /></p>';
        }   

    } 
?> 
        
        <form class="form-signin wow fadeInUp" action="" method="post">
                <h2 class="form-signin-heading">Registro</h2>
                <div class="login-wrap">
                    <p>Ingresar sus Datos Personales</p>
                    <input type="text" name="nombres" class="form-control" placeholder="Nombres" autofocus="" value="<?php echo $nombres; ?>" >
                    <input type="text" name="apePat" class="form-control" placeholder="Apellido paterno" autofocus="" value="<?php echo $apePaterno; ?>">
                    <input type="text" name="apeMat" class="form-control" placeholder="Apellido materno" autofocus=""  value="<?php echo $apeMaterno; ?>">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="ejemplo@gmail.com" autofocus="" value="<?php echo $email; ?>" >
                    <label>Teléfono:</label>
                    <input type="tel" name="tel" class="form-control" placeholder="01234567890" autofocus="" value="<?php echo $tel;?>" >
                    <label>Institución educativa de procedencia:</label>
                    <select class="form-control border-radius" name="instituto"  >
                        <option value="ITCM" selected="<?php if($escuela == "ITCM"){ echo "ITCM";}?>">Instituto Tecnológico de Ciudad Madero</option>
                        <option value="UTA" selected="<?php if($escuela == "UTA"){ echo "UTA";}?>">Universidad Tecnológica de Altamira</option>
                        <option value="ITESM-TAMPICO" selected="<?php if($escuela == "ITESM-TAMPICO"){ echo $escuela;}?>">Instituto Tecnológico de Estudios Superiores de Monterrey Campus Tampico</option>
                        <option value="UNE" selected="<?php if($escuela == "UNE"){ echo "UNE";}?>">Universidad del Noreste</option>
                        <option value="CETIS-109" selected="<?php if($escuela == "CETIS-109"){ echo "CETIS-109";}?>">Centro de Estudios Tecnológicos Industrial y de Servicios No. 109</option>
                        <option value="CBTIS-103" selected="<?php if($escuela == "CBTIS-103"){ echo "CBTIS-103";}?>">Centro de Bachilleres Tecnológico Industrial y de Servicios No. 103</option>
                        <option value="CBTIS-164" selected="<?php if($escuela == "CBTIS-164"){ echo "CBTIS-164";}?>">Centro de Bachilleres Tecnológico Industrial y de Servicios No. 164</option>
                    </select>
                    <label >Fecha de nacimiento:</label>
                    <input type="date" name="fechaNac" class="form-control" value="<?php echo $fechaNac; ?>"><br />
                    <label>Genero:</label>
                    <div class="radios">
                        <label class="label_radio col-lg-6 col-sm-6" for="radio">
                            <input name="genero" id="radio-01" value="M" type="radio" <?php if($genero == "M"){ echo 'checked = ""';} ?> > Masculino
                        </label>
                        <label class="label_radio col-lg-6 col-sm-6" for="radio">
                            <input name="genero" id="radio-02" value="F" type="radio" <?php if($genero == "F"){ echo 'checked = ""';}?> > Femenino
                        </label>
                    </div>
                    <br />
                    <p> Ingresar datos de la Cuenta</p>
                    <label>Tipo de usuario:</label>
                    <select class="form-control border-radius" name="tipoUsu">
                        <option  value="Participante" selected="<?php if($tipoUsu == "Participante"){ echo "Participante";}?>">Participante general</option>
                        <option value="Expositor" selected="<?php if($tipoUsu == "Expositor"){ echo "Expositor";}?>">Expositor</option>
                        <option value="Administrador" selected="<?php if($tipoUsu == "Administrador"){ echo "Administrador";}?>">Administrador</option>
                    </select>
                    <label>Paquete:</label>
                    <div class="radios">
                        <label class="label_radio col-lg-6 col-sm-6" for="radio">
                            <input name="paquete" id="radio-01" value="0" type="radio" <?php if($paquete == "0"){ echo 'checked = ""';}?>>General: $600.00
                        </label>
                        <label class="label_radio col-lg-6 col-sm-6" for="radio">
                            <input name="paquete" id="radio-02" value="1" type="radio"<?php if($paquete == "1"){ echo 'checked = ""';}?>> Socios:   $500.00
                        </label>
                    </div>
                    <input type="password" name="pass1" class="form-control" placeholder="Contraseña"  value="<?php echo $pass1; ?>">
                    <input type="password" name="pass2" class="form-control" placeholder="Confirmar Contraseña" value="<?php echo $pass2; ?>">
                    
                    <button class="btn btn-lg btn-login btn-block" type="submit">Enviar</button>

                    <div class="registration">
                        ¿Ya tienes con una cuenta?
                        <a class="" href="sesion.php">
                            Inicia Sesión
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</main>

<?php 
    include("inc/footer1.inc.html");
?>