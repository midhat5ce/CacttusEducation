<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Book Share</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>


<?php include "func/sessionLoged.php" ?>
<?php include "layout/nav.php" ?>


<div class="container">


		<?php include"profileTable.php" ?>
	<?php include"forms/changePassForm.php" ?>

	<?php 	if (isset($_SESSION['message'])) {

			echo " <div class='text-center text-danger'> {$_SESSION['message']}! </div>";
			

			unset($_SESSION['message']);
		} ?>




</div>




</body>
</html>