
<?php




if(isset($_POST['checkLogOut'])){

	$check = $_POST['logoutconfirm'];


		if ($check == "Y"){
			session_start();

			unset($_SESSION['user_id']);

			header("Location: ../log.php");
		} else if ($check == "N"){
			header("Location: ../index.php");
		}
 
}

?>