          <form  method="post" action="../CacttusEducation/func/changePass.php">
            <div class="col-md-6 m-auto">
            <legend>Change Password</legend>
          </div>
            <div class="col-md-6 m-auto">
           <label>Old Password : </label>
           <input name ="oldpassword" type="password" class="form-control" required  placeholder="Old Password">
            </div>

          <div class="col-md-6 m-auto">
            <label>New Password: </label>
            <input name="npassword" type="password" class="form-control" required  placeholder="New Password">
          </div>

          <div class="col-md-6 m-auto">
            <label>Confirm New Password: </label>
            <input name="cpassword" type="password" class="form-control" required  placeholder="Confirm New Password">
          </div><br>
          <div class="col-md-6 m-auto">
        <button type="submit" name="changePass" class="btn btn-primary">Change</button>
      </div><br>
        </form>