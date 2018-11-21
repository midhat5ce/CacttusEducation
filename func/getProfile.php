<?php 

    include "connection.php";
    $connection=getConnection();
    
  

 



	   $id=$_SESSION['user_id'];





    $query = "SELECT user_uname,user_fname,user_lname,user_address,user_city FROM users WHERE user_id='$id' ";
   
    $result = mysqli_query($connection, $query);
		
	 if(mysqli_num_rows($result) == 1){
     
      $user = mysqli_fetch_assoc($result);

      $userName=$user['user_uname'];
      $firstName=$user['user_fname'];
      $lastName=$user['user_lname'];
     
      $addres=$user['user_address'];
      $qyteti=$user['user_city'];
      
     } 

      ?>