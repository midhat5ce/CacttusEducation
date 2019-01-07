	
<form  method="post" action="">
		
		
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
			<input type="file" name="fileupload" value="fileupload" id="fileupload" required>
		</div> 	<br>
			<div class="col-md-6 m-auto">	
			<button type="submit" name="addBook" class="btn btn-primary">Submit</button>
			</div>

		
		
	</form>


<?php 

$connection = mysqli_connect("localhost", "root", "", "projecti");


$bname = "";
$author = "";
$category = "";
$year = "";
$isbn = "";
$fileupload = "";






if(isset($_POST['addBook'])){

    $bname = mysqli_real_escape_string($connection, $_POST['bname']);
    $author = mysqli_real_escape_string($connection, $_POST['author']);
    $category = mysqli_real_escape_string($connection, $_POST['category']);
	$year = mysqli_real_escape_string($connection, $_POST['year']);
	$isbn = mysqli_real_escape_string($connection, $_POST['isbn']);
	$fileupload = mysqli_real_escape_string($connection, $_POST['fileupload']);

  


    	if (empty($bname) || empty($author) ){


           
            $_SESSION['message'] = "Something went wrong please try again!";
            
    		
    		
		
		}else{

				
			
	              $id=$_SESSION['user_id'];

				$checkIfThereIsABook="SELECT * FROM books where u_id='$id' and book_name='$bname'  and book_author='$author' ";

				 $result = mysqli_query($connection, $checkIfThereIsABook);


			    if(mysqli_num_rows($result) == 1){


			    	$_SESSION['message'] = "The Book is already added!";
			    	

			  

			    }else{





			    	
			    	 $inserBookQuery = "INSERT INTO books (u_id, book_name, book_author,category,year,isbn,image,available ) 
	                                VALUES('$id', '$bname', '$author','$category','$year','$isbn','$fileupload',1)";
			
		
	            $result1 = mysqli_query($connection, $inserBookQuery);

	             $_SESSION['message'] = "Book was added succesfully!";

	           
 
			    }
	            
       
  


		
   
    	}
	
}

 ?>