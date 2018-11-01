<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Custom fonts for intro-->
   <!--  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
 -->
    <!-- Custom styles for intro -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  <!-- <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> -->
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



    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/mine.css"/>

    <script src= "js/jquery.min.js"></script>
    <script src= "js/bootstrap.js"></script>

      <!-- Bootstrap core about-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap core JavaScript  intro-->
    <script src="vendor2/jquery/jquery.min.js"></script>
    <script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

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
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="images/chocha.jpg" alt="Architecture" width="1500" height="800">
   <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-blue"><span class="w3-padding w3-blue w3-opacity-min"><b>Five Star</b></span> <br><br><span class="w3-hide-small w3-text-blues">Essays</span></h1>
    <br>
  </div>
    <div class="w3-display-right w3-padding w3-col l6 m8" style="max-width:500px;">
   <div class="w3-container w3-blue">
      <h2><i class="w3-margin-right"></i>Place Order</h2>
    </div>
  <div class="w3-container w3-white w3-padding-16">
      <form action="">
       <select name="category" id="document">
        <option value="Essay">Essay</option>
        <option value="Research Paper">Research Paper</option>
        <option value="Course Work">Course Work</option>
        <option value="Assignment">Assignment</option>
        <option value="Case Study">Case Study</option>
        <option value="Business Plan">Business Plan</option>
        <option value="Dissertation">Dissertation</option>
        <option value="Biography">Biography</option>
        <option value="Book Report">Book Report</option>
     </select>
     <br>   
     <br>   
      <label for="date">Deadline:</label>
                <input type="date" class="form-control" name="deadline" required>
   <br> 
   <br> 
     <label for="pages"><b>Number of pages</b></label>
     <input type="text" placeholder="Number of pages" name="pages" required>
 <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="order.php">Place your order!</a>
            </div>
    </form>
  </div>
  
  </div>
</header>


<br>
<br>
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
    <li id="services">Case Studies</li></ul>  </div>
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

<div class="container-fluid bg-grey">
  <div class="container">
    <h2 style="text-align: center;">Quality is our priority</h2><br>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="images/image1.jpg"  alt="loading">
      <p>We are dedicated to finding the best writers who will craft your essays professionally to suit your needs.Each essay will be perfectly tailored for you.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="images/image4.jpg" alt="loading">
      <p>We are focused on providing quality at a pocket friendly price.Contact us today and be part of this experience.An experience of quality work delivered in a timely manner.
      </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="images/image5.jpg" alt="loading">
      <p>Well you can relax as we understand the importance of confidentiality in our business.Our cooperations will remain between us as usual</p>
      </div>
    </div>
  
</div>


   <h2 style="text-align: center;">What our Clients say</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>"Quality work delivered in a timely fashion"<br><span style="font-style:normal;">Eugene Maseria ,Student</span></h4>
    </div>
    <div class="item">
      <h4>"They have the best writers in the market"<br><span style="font-style:normal;">Joel Mungai, Student</span></h4>
    </div>
    <div class="item">
      <h4>"Best place to get help with writing online"<br><span style="font-style:normal;">Keith Ochieng, Student</span></h4>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
</div>
<?php include 'footer.php' ?>
<?php include'chat.php' ?>

</body>
</html>