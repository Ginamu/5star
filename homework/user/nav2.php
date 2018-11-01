<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="home.php" id="navText">Home</a></li>
      <li><a href="services.php" id="navText">Services</a></li>
      <li><a href="order.php" id="navText">Order</a></li> 
      <li><a href="about.php" id="navText">About</a></li>
      <li><a href="contact.php" id="navText">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php" id="navText"><?php echo $_SESSION['name']; ?></a></li>
      <li><a href="logout.php" id="navText"><span class="glyphicon glyphicon-log-in" id="navText" ></span> Logout</a></li>
    </ul>
  </div>
</nav>