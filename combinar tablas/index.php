<?php require'conn.php'?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://compubinario.com">CompuBinario</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Combinar Dos Tablas Usando PHP y MySQLi</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-6">
			<center><h4>Dueños</h4></center>
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>ID</th>
						<th>Nombre</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query=mysqli_query($conn, "SELECT * FROM `owner`") or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $fetch['owner_id']?></td>
						<td><?php echo $fetch['owner_name']?></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
			<center><h4>Carro</h4></center>
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>ID</th>
						<th>Nombre</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query=mysqli_query($conn, "SELECT * FROM `car`") or die(mysqli_error());
						while($fetch=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $fetch['car_id']?></td>
						<td><?php echo $fetch['car_name']?></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<form method="POST" action="">
				<center><button class="btn btn-primary" name="submit">Tabla Combinada</button></center>
			</form>
			<br />
			<?php include'merge.php'?>
		</div>
	</div>
</body>	
</html>