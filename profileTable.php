<?php include "func/getProfile.php" ?>


   <button class="btn btn-primary  mb-4" data-toggle="collapse" data-target="#collapse-btn-2">Change Profile</button>
   
    <div class="collapse mb-5 m-auto" id="collapse-btn-2" >
      <div class="card" >
        <div class="card-body">
            <div class="col-md-5 m-auto">
              <form  method="post" action="func/changeProfile.php">
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

























  
	      



	     
	

