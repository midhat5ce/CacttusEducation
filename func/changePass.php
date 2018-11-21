<?php 

    include "connection.php";
    $connection=getConnection();
    session_start();
    

    if(isset($_POST['changePass'])){




    $id=$_SESSION['user_id'];



    $query = "SELECT user_password FROM users WHERE user_id='$id' ";

    $result = mysqli_query($connection, $query);

          if(mysqli_num_rows($result) == 1){
       
              $user = mysqli_fetch_assoc($result);

     
              $password=$user['user_password'];

              $oldP = mysqli_real_escape_string($connection, $_POST['oldpassword']);
              $newP = mysqli_real_escape_string($connection, $_POST['npassword']);
              $confirmNewP=mysqli_real_escape_string($connection, $_POST['cpassword']);


                if (empty($oldP) || empty($newP) || empty($confirmNewP) || $newP != $confirmNewP ){
                    

                    $_SESSION['message']="Please fill your forms correctly";
                    header("Location: ../profili.php");
                    
                
                }else{
                        

                    if($password == md5($oldP)){
                       $newPassword = md5($newP);

                      $chpquery = "update users set user_password = '{$newPassword}' where user_id = {$id}";

                      $result = mysqli_query($connection, $chpquery);
                      $_SESSION['message']="Password Changed";

                       header("Location: ../profili.php");

                    }else{
                      $_SESSION['message']="Please fill your forms correctly";
                        header("Location: ../profili.php");
                    }
                }
          }
  }
         ?>