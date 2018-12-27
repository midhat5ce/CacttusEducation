<?php include "func/getProfile.php" ?>


   <button class="btn btn-primary d-block mb-4" data-toggle="collapse" data-target="#collapse-btn-2">Change Profile</button>
   
    <div class="collapse mb-5 m-auto" id="collapse-btn-2">
      <div class="card">
        <div class="card-body">
            <div class="col-md-5 m-auto">
              <form  method="post" action="">
                <legend>Change Profile</legend>
                <div class="form-group">
               <label>New Username : </label>
               <input name ="uname"  class="form-control" required  placeholder= <?= $userName ?>>
                </div>

              <div class="form-group">
                <label>New First Name: </label>
                <input name="fname" class="form-control" required  placeholder= <?= $firstName ?> >
              </div>

              <div class="form-group">
                <label> New Last Name: </label>
                <input name="lname"  class="form-control" required  placeholder= <?= $lastName ?> >
              </div>

              <div class="form-group">
                <label> New  Address: </label>
                <input name="address" class="form-control" required  placeholder= <?= $addres ?> >
              </div>

              <div class="form-group">
                <label> New City: </label>
                <input name="city" class="form-control" required  placeholder= <?= $qyteti ?> >
              </div>
            <button type="submit" name="changeProfile" class="btn btn-primary">Change</button>
            </form>
              
            </div>
        </div>
      </div>
    </div>


    <?php 

    
    $connection = mysqli_connect("localhost", "root", "", "projecti");
    
   
    

    if(isset($_POST['changeProfile'])){




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
                        

                  /*  if($password == md5($oldP)){
                       $newPassword = md5($newP);*/

                    


                    $chpquery = "UPDATE `users` SET `user_uname`='{$newuname}',`user_fname`='{$newfname}',
                    `user_lname`='{$newlname}',`user_address`='{$newaddress}',`user_city`='{$newcity}' where user_id = {$id}";

                      $result = mysqli_query($connection, $chpquery);
                      /*$_SESSION['message']="Profile Changed";
*/
                     /*  header("Location: ../CacttusEducation/profili.php");*/

                        
                    
                }
          }
  }
         ?>



























<!-- 
<div class="col-md-5 m-auto">
        


            <ul class="list-group mb-5">
            <li class="list-group-item">Username :  <?= $userName ?> </li>
            <li class="list-group-item">First Name :  <?= $firstName ?> </li>
            <li class="list-group-item">Last Name :  <?= $lastName ?> </li>
            <li class="list-group-item">Address :  <?= $addres ?></li>
            <li class="list-group-item">City :  <?= $qyteti ?></li>
            </ul>
            


</div>
 -->




  
	      



	     
	

