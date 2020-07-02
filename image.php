<?php 

$filename = $_FILES['uploadfile']['name'];
$tempname = $_FILES['uploadfile']['tmp_name'];
$folder = "student/".$filename;
move_uploaded_file($tempname, $folder); 
echo "<img src='$folder' height='100' width='100'>";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="uploadfile" value="">
		<input type="submit" name="submit" value="Upload File">
	</form>
</body>
</html>