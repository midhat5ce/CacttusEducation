<?php 
	include "connection.php";



$connection=getConnection();

$uname = "";
$password = "";
$userCPassword = "";
$fname="";
$lname ="";
$address="";
$qyteti="";



if(isset($_POST['addUser'])){
    $uname = mysqli_real_escape_string($connection, $_POST['uname']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $userCPassword = mysqli_real_escape_string($connection, $_POST['userCPassword']);
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
     $qyteti = mysqli_real_escape_string($connection, $_POST['qyteti']);


    	if (empty($uname) || empty($password) || empty($userCPassword) || empty($fname) || empty($lname) || empty($address) ){


            session_start();
            $_SESSION['message'] = "Please fill all the forms !";
            header("Location: ../signup.php?message=Wrong!!!");
    		
    		
		
		}elseif(($password != $userCPassword)){
             session_start();
            $_SESSION['message'] = "Passwords do not match!";
            header("Location: ../signup.php?message=Wrong!!!");

        }else{


		    $passwordHash = md5($password);
            
            $insertUserQuery = "INSERT INTO users (user_uname, user_password, user_fname, user_lname,user_address,user_city) 
                                VALUES('$uname', '$passwordHash', '$fname', '$lname' ,'$address' ,'$qyteti')";
		
	
            $result = mysqli_query($connection, $insertUserQuery);
  


		header("Location: ../index.php");
   
    }
}



 ?>