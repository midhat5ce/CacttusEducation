   <button class="btn btn-primary float-right mb-4" data-toggle="collapse" data-target="#collapse-btn-1">Change Password</button>
   
    <div class="collapse mb-5 m-auto" id="collapse-btn-1">
      <div class="card">
        <div class="card-body">
            <div class="col-md-5 m-auto">
              <form  method="post" action="">
                <legend>Change Password</legend>
                <div class="form-group">
               <label>Old Password : </label>
               <input name ="oldpassword" type="password" class="form-control" required  placeholder="Old Password">
                </div>

              <div class="form-group">
                <label>New Password: </label>
                <input name="npassword" type="password" class="form-control" required  placeholder="New Password">
              </div>

              <div class="form-group">
                <label>Confirm New Password: </label>
                <input name="cpassword" type="password" class="form-control" required  placeholder="Confirm New Password">
              </div>

            <button type="submit" name="changePass" class="btn btn-primary">Change</button>
            </form>
              
            </div>
        </div>
      </div>
    </div>

 
   



   

         <?php 

    
    $connection = mysqli_connect("localhost", "root", "", "projecti");
    
   
    

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
                    

                    $_SESSION['message']="Please fill your forms ";
                    header("Location: ../CacttusEducation/profili.php");
                    
                
                }else{
                        

                    if($password == md5($oldP)){
                       $newPassword = md5($newP);

                      $chpquery = "update users set user_password = '{$newPassword}' where user_id = {$id}";

                      $result = mysqli_query($connection, $chpquery);
                      $_SESSION['message']="Password Changed";

                       header("Location: ../CacttusEducation/profili.php");

                    }else{
                      $_SESSION['message']="Passwords do not match";
                        header("Location: ../CacttusEducation/profili.php");
                    }
                }
          }
  }
         ?>
          
          

          

       
  