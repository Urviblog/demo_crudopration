<?php 
include('conn.php');

if(isset($_POST['done'])){

	$id = $_GET['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$filename = $_FILES['uploadfile']['name'];
	$tempname = $_FILES['uploadfile']['tmp_name'];
	$folder = "student/".$filename;
	move_uploaded_file($tempname, $folder); 

	$q = " UPDATE crudtable SET id=$id, username='$username', password='$password', picsource='$folder' WHERE id=$id ";
    
	$query = mysqli_query($con,$q);

	header('location:display.php');
}
?>

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
	<div class="col-lg-6 m-auto">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white text-center">Update Operation</h1>
				</div>

				<label>Username:</label>
				<input type="text" name="username" class="form-control">
				<label>Password:</label>
				<input type="password" name="password" class="form-control">
				<input type="file" name="uploadfile" value="">
				<button class="btn btn-success" type="submit" class="form-control" name="done">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>