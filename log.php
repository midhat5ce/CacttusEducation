<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>BookShare</title>
   
</head>
<body>



<?php include "layout/nav1.php" ?>



<div class="container">


	

<?php include "forms/logIn.php" ?>


<?php include"func/sessionIncorrect.php" ?>
<div class="text-center">Not registered yet?<a href="signup.php">click here</a></div>


</div>




</body>
</html>