<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/mine.css"/>	
    <script src= "js/jquery.min.js"></script>
    <script src= "js/bootstrap.js"></script>
</head>
<body>
	<?php include 'nav.php' ?>

<br>
<div class="container">
  <div class="col-md-6 col-md-offset-3">
     <form action="process_login.php" method="post">
    <h1>Login</h1>
     <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>


     <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <div class="clearfix">
      <button type="Login" class="loginbtn" name="login">Login</button>
    </div>
     </form>
  </div>
</div>
	



<?php include 'footer.php' ?>
</body>
</html>