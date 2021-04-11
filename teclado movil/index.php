<!DOCTYPE html>
<html>
<head>
    <title>Teclado Movil</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	require_once("form_teclado.php");
?>

<div class="container">
    <div style="height:50px;"></div>
    <div class="well" style="margin:auto; padding:auto; width:80%;">
		<h3><strong>Teclado movil</strong></h3>
			<div class="input-field">
				<h3>Por favor rellene todos los campos</h3>
				<form method="GET" action="" >
				
					<div class="form-group">
						<label>Mensaje:</label>
						<input type="text" class="form-control" name="formmsj" style="width:20em;"
						value="<?php if(isset($msj)){echo $msj;} ?>" required pattern="^[a-zA-Z]{}"
						placeholder="Hola mundo" />
					</div>
					
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
					</div>
					
					<div class="form-group">
						<label ><?php echo $res; ?></label>
						
					</div>
				</form>
			</div>
			
		
    </div>
    
</div>
</body>
</html>