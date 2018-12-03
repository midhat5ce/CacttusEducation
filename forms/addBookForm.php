	
<form  method="post" action="func/addBookFunc.php">
		
		
		<div class="form-group col-md-5">
			<label><strong>Book Name:</strong> </label>
			<input type="text" name="bname" class="form-control" required  placeholder="Book Name">
		</div>
		<div class="form-group col-md-5">
			<label><strong>Author:</strong> </label>
			<input type="text" name="author"   class="form-control"  required  placeholder="Author">
		</div>
				<div class="form-group col-md-5">
			<label><strong>Category:</strong> </label>
			<input type="text" name="category" class="form-control" required  placeholder="Category">
		</div>
		<div class="form-group col-md-5">
			<label><strong>Year:</strong> </label>
			<input type="number" name="year" class="form-control" required  placeholder="Year">
		</div>
		<div class="form-group col-md-5">
			<label><strong>ISBN:</strong> </label>
			<input type="number" name="isbn" class="form-control" required  placeholder="ISBN">
		</div>
		<div class="form-group col-md-5">
			<label><strong>Image:</strong></label><br>
			<input type="file" name="fileupload" value="fileupload" id="fileupload">
		</div> 	
			<div>
			<button type="submit" name="addBook"class="btn btn-primary">Submit</button>
			</div>

		
		
	</form>