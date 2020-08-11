<!DOCTYPE html>
<html>
<head>
	<title>upload image</title>
</head>
<body>

	<form action="store.php" method="post" enctype="multipart/form-data">
		Roll number<input type="text" name="id">
		<input type="file" name="image">
		<input type="submit" value="Upload image">
	</form>

</body>
</html>