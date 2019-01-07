
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Bookshare</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  
</head>
<body>

<?php include "func/sessionLoged.php" ?>
<?php include "layout/nav.php" ?>  
  <div class="container">
  <form class="form-inline mr-auto" style="margin-top: 25px;margin-left:-27px " >
  <input class="form-control col-md-5 ml-2 type="text" placeholder="Search" aria-label="Search">
  <button class="btn blue-gradient btn-rounded btn-sm my-0 ml-1" style="height: 36px;" type="submit" >Search</button>
</form>
</div>

<?php 

    
    $connection = mysqli_connect("localhost", "root", "", "projecti");
    
  

 



     $id=$_SESSION['user_id'];


     $query ="select u.user_id,u.user_fname,u.user_lname,u.user_address,b.u_id,b.book_name,b.book_author,b.image from books b join users u on u.user_id = b.u_id where b.available = 1 and not b.u_id = '$id' limit 10";


    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)){ ?>
<div id="imgdiv" class="border border-dark , rounded" style="margin-top:40px; margin-bottom:20px; margin-left:100px ;margin-right:100px;">

<div class="container" style="margin-top:30px;">
  <div class="row">
    <div class="col-sm-4">

      
      <div class="fakeimg" style=" margin-left: 10px;margin-bottom: 25px;"> 
        <img src="image/<?= $row['image'] ?> " height="205 " width="" > 
        <!-- <img src="image/logo.png" height="240px" width=""> -->
      </div>
     
     
     
       
    </div>
    
    <div class="mx-auto" style="width: 300px; margin-top:7px; ">
      <h4><?= $row['book_name'] ?></h5>
      
      <h6>Emri i Librit: <?= $row['book_name'] ?></h6>
      <h6>Autori: <?= $row['book_author'] ?></h6>
      <br>
      <br>
      <h6>Pronari : <?= $row['user_fname'] ?> <?= $row['user_lname'] ?></h6>
      <h6>Adresa : <?= $row['user_address'] ?></h6>      
      
    </div>

</div>
  
</div>
</div>


<?php } ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
</body>
</html>


