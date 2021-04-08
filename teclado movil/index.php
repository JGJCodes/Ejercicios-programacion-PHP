<!DOCTYPE html>
<html>
<head>
    <title>Teclado Movil</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div style="height:50px;"></div>
    <div class="well" style="margin:auto; padding:auto; width:80%;">
    <span style="font-size:25px; color:blue"><center>
	<strong>Teclado Movil</strong></center></span>    
        <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary">
		<span class="glyphicon glyphicon-plus"></span> Agregar Registro</a></span>
        <div style="height:50px;"></div>
        <?php
            include('conn.php');
            
        ?>
		
		<table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Accion</th>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </div>
    
</div>
</body>
</html>