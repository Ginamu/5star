<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<!--  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> -->
 <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800,900,200,100' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>


  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen"> 

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />

  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
  
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

  <!-- Style Switch -->
  <link rel="alternate stylesheet" type="text/css" href="css/colors/yellow-black.css" title="yellow" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/violet-black.css" title="black" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="css/colors/orange-black.css" title="orange" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="css/colors/blue-black.css" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/red-black.css" title="red" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="css/colors/green-black.css" title="green" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="css/colors/pink-black.css" title="pink" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="css/colors/pale-green-black.css" title="pale-green" media="screen" />



    <!-- Custom styles for this template -->
    <link href="css/round-about.css" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/mine.css"/>


    <script src= "js/jquery.min.js"></script>
    <script src= "js/bootstrap.js"></script>
</head>
<body>
	<?php
session_start();
if (!isset($_SESSION['email'])) {
include 'nav.php';
}
else{
   include 'nav2.php'; 
}

?>
	
	 <!-- Page Content -->
    <div class="container">
    <br>
    <br>
      <!-- Introduction Row -->
      <h1 class="my-4">About Us
      <br>
        <small>It's Nice to Meet You!</small>
      </h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Our Team</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
      </div>

    </div>
    <!-- /.container -->

<?php include 'footer.php' ?>
</body>
</html>