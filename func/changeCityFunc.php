<?php 

    include "connection.php";
    $connection=getConnection();
    
    

    if(isset($_POST['changeCitySubmit'])){

      $newCity = mysqli_real_escape_string($connection, $_POST['newCity']);

       if (empty($newCity)  ){
                    

                    $_SESSION['message']="Please fill your forms correctly";
                    header("Location: ../profili.php");
                    
                
      }else{
             
              session_start();

              $id=$_SESSION['user_id'];
              $newCity = mysqli_real_escape_string($connection, $_POST['newCity']);



               $query = "UPDATE `users` SET `user_city`='$newCity' WHERE user_id='$id' ";

              $result = mysqli_query($connection, $query);

             header("Location: ../profili.php");

                  
       }

      

    }
       
             

  
         ?>