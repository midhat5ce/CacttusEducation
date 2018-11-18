<?php 
	include "connection.php";


$connection=getConnection();

$uname = "";
$password = "";




if(isset($_POST['logCheck'])){
    $uname = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
 


    	if (empty($uname) || empty($password) ){

    		header("Location: ../log1.php");
    		
		
		}
    else{


		$passwordHash = md5($password);
    $checkQuery = "SELECT * FROM users WHERE user_uname='$uname' AND user_password='$passwordHash'";
    var_dump($checkQuery);
    $results = mysqli_query($connection, $checkQuery);
		
	 if(mysqli_num_rows($results) == 1){
      header("Location: ../main.php");
   }else{
     header("Location: ../log1.php");
   }
  
  

  }
}



 ?>