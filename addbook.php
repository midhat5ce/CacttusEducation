<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BookShare</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet"  href="css/style.css">
</head>
<body background="image/book.jpg">
	<?php include "layout/nav.php" ?>





<form style="width: 500px; margin:auto" method="post" action="func/addUser.php">
		

		<div class="form-group">
			<label><strong>Book Name:</strong> </label>
			<input type="text" name="bname" class="form-control" required  placeholder="Book Name">
		</div>
		<div class="form-group">
			<label><strong>Author:</strong> </label>
			<input type="text" name="author"   class="form-control"  required  placeholder="Author">
		</div>
		

		
		<button type="submit" name="addUser"class="btn btn-primary">Submit</button>

		
	</form>









</body>
</html>