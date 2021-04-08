<?php
	if(ISSET($_POST['submit'])){
?>
<table class="table table-bordered">
	<thead class="alert-info">
		<tr>
			<th>ID</th>
			<th>Dueño</th>
			<th>Carro</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query=mysqli_query($conn, "SELECT * FROM `owner` LEFT JOIN `car` ON owner.car_id = car.car_id") or die(mysqli_error());
			while($fetch=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $fetch['owner_id']?></td>
			<td><?php echo $fetch['owner_name']?></td>
			<td><?php echo $fetch['car_name']?></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
<?php
	}
?>