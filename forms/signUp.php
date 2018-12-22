
	<form  method="post" action="func/addUser.php">
		<div class="col-md-6 m-auto">
			<label>Username: </label>
			<input type="text" name="uname" class="form-control" required autofocus placeholder="Username">
		</div>
			<div class="col-md-6 m-auto">
			<label>Password: </label>
			<input type="password" name="password" class="form-control" required  placeholder="Password">
		</div>

		<div class="col-md-6 m-auto">
			<label>Confirm Password: </label>
			<input type="password" name="userCPassword" class="form-control" required  placeholder="Confirm Password">
		</div>

		<div class="col-md-6 m-auto">
			<label>First Name: </label>
			<input type="text" name="fname" class="form-control" required  placeholder="First Name">
		</div>

		<div class="col-md-6 m-auto">
			<label>Last Name: </label>
			<input type="text" name="lname" class="form-control" required  placeholder="Last Name">
		</div>

		<div class="col-md-6 m-auto">
			<label>Address: </label>
			<input type="text" name="address" class="form-control" required  placeholder="Address">
		</div>

		<div class="col-md-6 m-auto">
			<label>Qyteti: </label>
			<input type="text" name="qyteti" class="form-control" required  placeholder="Qyteti">
		</div><br>
		<div class="col-md-6 m-auto">
		<button type="submit" name="addUser"class="btn btn-primary">Submit</button>
		</div>

		
	</form>
