<?php 

include "connection.php";
$connection=getConnection();


$bname = "";
$author = "";




if(isset($_POST['addBook'])){

    $bname = mysqli_real_escape_string($connection, $_POST['bname']);
    $author = mysqli_real_escape_string($connection, $_POST['author']);
    


    	if (empty($bname) || empty($author) ){


            session_start();
            $_SESSION['message'] = "Something went wrong please try again!";
            header("Location: ../addbook.php");
    		
    		
		
		}

		else{

				session_start();

	              $id=$_SESSION['user_id'];

				$checkIfThereIsABook="SELECT * FROM books where u_id='$id' and book_name='$bname'  and book_author='$author' ";

				 $result = mysqli_query($connection, $checkIfThereIsABook);


			    if(mysqli_num_rows($result) == 1){


			    	$_SESSION['message'] = "The Book is already added!";
			    	header("Location: ../addbook.php");

			  

			    }else{






			    	 $inserBookQuery = "INSERT INTO books (u_id, book_name, book_author) 
	                                VALUES('$id', '$bname', '$author')";
			
		
	            $result1 = mysqli_query($connection, $inserBookQuery);

	             $_SESSION['message'] = "Book was added succesfully!";

	            header("Location: ../addbook.php");

			    }
	            
       
  


		
   
    	}
	
}

 ?>