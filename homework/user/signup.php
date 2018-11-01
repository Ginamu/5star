<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/mine.css"/>	
    <script src= "js/jquery.min.js"></script>
    <script src= "js/bootstrap.js"></script>
</head>
<body>
<?php include 'nav.php' ?>
<br>
<br>
<div class="container" id="divForm">

<div class="col-md-6 col-md-offset-3" >
  <form action="process_signup.php" method="post">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>



     <label for="name"><b>Name</b></label>
     <input type="text" placeholder="Enter Name" name="name" required>


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>


     <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <div class="clearfix">
      <button type="submit" class="signupbtn" name="submit">Sign Up</button>
    </div>
 
</form>
</div>
  
</div>
  
	
	
</div>
<?php include 'footer.php' ?>
</body>
</html>