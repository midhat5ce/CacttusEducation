    <?php 

    
    $connection = mysqli_connect("localhost", "root", "", "projecti");
    
   
    

    if(isset($_POST['changeProfile'])){


      session_start();

    $id=$_SESSION['user_id'];



    $query = "SELECT user_uname,user_fname,user_lname,user_address,user_city FROM users WHERE user_id='$id' ";

    $result = mysqli_query($connection, $query);

          if(mysqli_num_rows($result) == 1){
       
              $user = mysqli_fetch_assoc($result);

              $newuname = mysqli_real_escape_string($connection, $_POST['uname']);
              $newfname = mysqli_real_escape_string($connection, $_POST['fname']);
              $newlname=mysqli_real_escape_string($connection, $_POST['lname']);
              $newaddress = mysqli_real_escape_string($connection, $_POST['address']);
              $newcity=mysqli_real_escape_string($connection, $_POST['city']);


                if (empty($newuname) || empty($newfname) || empty($newlname) || empty($newaddress) || 
                  empty($newcity)) {
                    

                    $_SESSION['message']="Please fill your forms ";
                    header("Location: ../CacttusEducation/profili.php");
                    
                
                }else{
                        

                    


                    $chpquery = "UPDATE `users` SET `user_uname`='{$newuname}',`user_fname`='{$newfname}',
                    `user_lname`='{$newlname}',`user_address`='{$newaddress}',`user_city`='{$newcity}' where user_id = {$id}";

                      $result = mysqli_query($connection, $chpquery);
                      $_SESSION['message']="Profile Changed";

                      header("Location: ../profili.php");

                        
                    
                }
          }
  }
         ?>
