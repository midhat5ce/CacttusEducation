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

	<div class="col-md-8 m-auto">
		<?php include"profileTable.php" ?>
		<?php include"forms/changePassForm.php" ?>
	</div>
		

	<?php 	if (isset($_SESSION['message'])) {

			echo " <div class='text-center text-danger'> {$_SESSION['message']}! </div>";
			

			unset($_SESSION['message']);
		} ?>
		
	

</div>



 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
</body>
</html>