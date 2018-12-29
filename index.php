<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BookShare</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>


<?php include "func/sessionLoged.php" ?>
<?php include "layout/nav.php" ?>


<div class="container">


	<?php 

    
    $connection = mysqli_connect("localhost", "root", "", "projecti");
    
  

 



	   $id=$_SESSION['user_id'];


     $query ="select u.user_id,u.user_fname,u.user_lname,u.user_address,b.u_id,b.book_name,b.book_author,b.image from books b join users u on u.user_id = b.u_id where b.available = 1 and not b.u_id = 5 limit 3";


    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)){ 

    	
                    echo "<img  src='image/".$row['image']."'>";
                    echo "<p>".$row['book_name']."</p>";
                    echo "<p>".$row['book_author']."</p>";
                    echo "<p>".$row['user_fname']."</p>";
                    echo "<p>".$row['user_lname']."</p>";
                    echo "<p>".$row['user_address']."</p>";
                    
     
     
    	
    }
		


      ?>



</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
</body>
</html>