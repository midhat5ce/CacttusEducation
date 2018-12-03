
	<form  method="post" action="func/addUser.php">
		<div class="form-group col-md-5">
			<label>Username: </label>
			<input type="text" name="uname" class="form-control" required autofocus placeholder="Username">
		</div>

		<div class="form-group col-md-5">
			<label>Password: </label>
			<input type="password" name="password" class="form-control" required  placeholder="Password">
		</div>

		<div class="form-group col-md-5">
			<label>Confirm Password: </label>
			<input type="password" name="userCPassword" class="form-control" required  placeholder="Confirm Password">
		</div>

		<div class="form-group col-md-5">
			<label>First Name: </label>
			<input type="text" name="fname" class="form-control" required  placeholder="First Name">
		</div>

		<div class="form-group col-md-5">
			<label>Last Name: </label>
			<input type="text" name="lname" class="form-control" required  placeholder="Last Name">
		</div>

		<div class="form-group col-md-5">
			<label>Address: </label>
			<input type="text" name="address" class="form-control" required  placeholder="Address">
		</div>

		<div class="form-group col-md-5	">
			<label>Qyteti: </label>
			<input type="text" name="qyteti" class="form-control" required  placeholder="Qyteti">
		</div>

		<button type="submit" name="addUser"class="btn btn-primary">Submit</button>

		
	</form>
