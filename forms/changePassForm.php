          <form  method="post" action="../CacttusEducation/func/changePass.php">
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