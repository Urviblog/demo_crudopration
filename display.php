<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<br>
		<div class="col-lg-12">
			<br>
			<h1 class="text-warning text-center"> Display Table Data</h1>
			<table class="table table-striped table-hover table-bordered">
				<tr>
					<th>ID</th>
					<th>IMAGE</th>
					<th>USERNAME</th>
					<th>PASSWORD</th>
					<th>DELETE</th>
					<th>UPDATE</th>
				</tr>
			<?php 
				include('conn.php');

				$q = "SELECT * FROM `crudtable`";

				$query = mysqli_query($con,$q);

				while ($res = mysqli_fetch_array($query)) {
			?>

				<tr>
					<td><?php echo $res['id']; ?></td>
					<td><a href="<?php echo $res['picsource']; ?>" target="_blank"><img src="<?php echo $res['picsource']; ?>" width='100' height='100'></a></td>
					<td><?php echo $res['username']; ?></td>
					<td><?php echo $res['password']; ?></td>
					<td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">DELETE</a></button></td>
					<td><button class="btn btn-primary"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">UPDATE</a></button></td>
				</tr>

			<?php

				}
			?>

			</table>
		</div>
	</div>
</body>
</html>