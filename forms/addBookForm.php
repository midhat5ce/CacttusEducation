	
<form  method="post" action="func/addBookFunc.php">
		
		
		<div class="col-md-6 m-auto">
			<label><strong>Book Name:</strong> </label>
			<input type="text" name="bname" class="form-control" required  placeholder="Book Name">
		</div>
		<div class="col-md-6 m-auto">
			<label><strong>Author:</strong> </label>
			<input type="text" name="author"   class="form-control"  required  placeholder="Author">
		</div>
				<div class="col-md-6 m-auto">
			<label><strong>Category:</strong> </label>
			<input type="text" name="category" class="form-control" required  placeholder="Category">
		</div>
		<div class="col-md-6 m-auto">
			<label><strong>Year:</strong> </label>
			<input type="number" name="year" class="form-control" required  placeholder="Year">
		</div>
		<div class="col-md-6 m-auto">
			<label><strong>ISBN:</strong> </label>
			<input type="number" name="isbn" class="form-control" required  placeholder="ISBN">
		</div>
		<div class="col-md-6 m-auto">
			<label><strong>Image:</strong></label><br>
			<input type="file" name="fileupload" value="fileupload" id="fileupload">
		</div> 	<br>
			<div class="col-md-6 m-auto">	
			<button type="submit" name="addBook"class="btn btn-primary">Submit</button>
			</div>

		
		
	</form>