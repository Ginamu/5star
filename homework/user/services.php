<!DOCTYPE html>
<html>
<head>
	<title>Services</title>




   


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
<br>
<br>
<br>

<div class="container container-fluid">
  <div class="row">
    <div class="col-md-6">
      <h2>Our Services</h2><br>

      <p>Our company is fully dedicated to providing you with the best service. Our aim is to help our customers reach their academic goals through the individualized attention you and your essay deserve.</p>

      <ul>
      	<li>Term Paper</li>
      	<li>Research Paper</li>
      	<li>Essay</li>
      	<li>Review</li>
      </ul>

      <p>Whether it's an essay help, a research paper help or a term paper help that you are looking for, we are at service 24/7.We will provide quality service within the shortest time possible.Relax and let us handle the work for you.</p>
<br>
<h2>Order today</h2>
							    <a href="order.php" class="btn btn-danger">Order Now</a>
    </div>
    <div class="col-md-6" style="max-width: 100%;">
      <img src="images/image3.jpg" alt="loading image">
    </div>
  </div>
</div>

<div class="container-fluid bg-blue">
	<div class="container">
		<h1 style="text-align: center; color: #fff;">Our Services</h1>
		<br>		
	<div class="col-md-4">
		<ul>
		<li id="services">Essays</li>
		<li id="services">Research Papers</li>
		<li id="services">Course Work</li>
		<li id="services">Assignments</li>
		<li id="services">Case Studies</li></ul>	</div>
	<div class="col-md-4">
		<ul>
			<li id="services">Business Plans</li>
			<li id="services">Dissertations</li>
			<li id="services">Biographies</li>
			<li id="services">Online Classes</li>
			<li id="services">Book Reports</li>
		</ul>
	</div>
	<div class="col-md-4">
		<li id="services">Book Reports</li>
		<li id="services">Editing Services</li>
		<li id="services">Plagiarism Check</li>
		<li id="services">Argumentative essays</li>
		<li id="services">Narrative essays</li>
	</div>
	</div>
<br>

</div>

<?php include 'footer.php' ?>



</body>
</html>