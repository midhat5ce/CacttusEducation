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
   
    $result = mysqli_query($connection, $checkQuery);
		
    	 if(mysqli_num_rows($result) == 1){
      session_start();
      $user = mysqli_fetch_assoc($result);
      $id=$user['user_id'];

      $_SESSION['user_id']=$id;
    
      header("Location: ../index.php");
      }else{
         session_start();
         $_SESSION['message'] = "Username or Password Incorrect !";
       
     header("Location: ../log.php");
   }
  

  }
}



 ?>