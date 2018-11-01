<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bookshare</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet"  href="css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 
  <a class="navbar-brand" href="#">BookShare</a>
  

</nav>


<div class="container">
  <h2>Welcome to Bookshare</h2>
  <form action="functions.php" method="POST">

    <div class="form-group">
    	<label>Username :</label>
    	<input type="text" class="form-control" name="un">
    </div>
    <div class="form-group">
      <label >Password:</label>
      <input type="password" class="form-control" name="pswd">
    </div>

        <div class="form-group">
      <label >Email:</label>
      <input type="email" class="form-control"  name="email">
    </div>

    <button type="submit" class="btn btn-primary">Sign Up</button>
  </form>
</div>

</body>
</html>