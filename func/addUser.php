<?php 
	include "connection.php";



$connection=getConnection();

$uname = "";
$password = "";
$userCPassword = "";
$fname="";
$lname ="";
$address="";



if(isset($_POST['addUser'])){
    $uname = mysqli_real_escape_string($connection, $_POST['uname']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $userCPassword = mysqli_real_escape_string($connection, $_POST['userCPassword']);
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);


    	if (empty($uname) || empty($password) || empty($userCPassword) || empty($fname) || empty($lname) || empty($address) || ($password != $userCPassword)){


           header("Location: ../signup1.php");
    		
    		
		
		}else{


		    $passwordHash = md5($password);
            
            $insertUserQuery = "INSERT INTO users (user_uname, user_password, user_fname, user_lname,user_address) 
                                VALUES('$uname', '$passwordHash', '$fname', '$lname' ,'$address')";
		
	
            $result = mysqli_query($connection, $insertUserQuery);
  


		header("Location: ../main.php");
   
    }
}



 ?>