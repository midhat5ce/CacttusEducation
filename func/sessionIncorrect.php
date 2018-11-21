<?php  
		session_start();
		if (isset($_SESSION['message'])) {

			echo " <div class='text-center text-danger'> {$_SESSION['message']}! </div>";
			

			unset($_SESSION['message']);
		}
	?>
	 