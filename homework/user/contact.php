<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>

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
 // if (isset($_GET['sent']) === true) {
  //   echo '<P>Thank you for your feedback</p>';
  // }
  // else{
  // if (empty($errors) === false) {
  //   echo '<ul>';
  //   foreach ($errors as $error) {
  //     echo '<li>', $error, '</li>';
  //   }
  //   echo '</ul>';
  // }

?>
  
 


    <div id="content">
<!-- 
      <div class="contact-content">


        <div class="map">
          <div id="map"></div>
        </div> -->
        <!-- End Map -->

        <div class="contact">
          <div class="container">

            <div class="title">
              <h1><i class="fa fa-star"></i> Get in Touch <i class="fa fa-star"></i></h1>
              <div class="title-border"></div>
            </div>

            <p class="subtitle">Let us know what you think about Five Star Essays.You can also ask questions and we will get back to you.Thank you</p>

            <div class="row">

              <div class="col-md-8">
                <h2>Contact Us</h2>
                <form id="contact-form" action="contact_process.php" method="post">
                  <input name="name" id="name" type="text" placeholder="Name*">

                  <input name="email" id="email" type="text"  placeholder="Email*">

                  <input name="subject" id="subject" type="text"  placeholder="Subject">  

                  <textarea name="message" id="message"  placeholder="Your Message*"></textarea>

                    <input type="submit" value="Send"  id="submit_contact" class="medium-button button-red" name="submit">
                    <div id="msg" class="message"></div>
                  </form>
              </div>
      
              <!-- end contactfort -->
              <div class="col-md-4 touch">

                <h2>INFORMATION</h2>
<!-- 
                <p><i class="fa fa-map-marker"></i> Little Lonsdale St, Talay Victoria 8011 Philippines</p>
 -->                <p><i class="fa fa-phone"></i> +1 (978) 648 80 87</p>
                <a href="#"><p style="color: #ea5748;" class="mb40"><i class="fa fa-envelope"></i> joe.eliteresearch@gmail.com</p></a>

                <h2>Business hours</h2>

                <p class="mb50">Monday – Sunday <br>
                24/7<br></p>
                              
                
                <h2>Stay Social</h2>              
        
                <ul>
                  <li><a href=""><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>

              </div>
            </div>
          </div>

        </div>
        </div>
	
<?php include 'footer.php' ?>

</body>
</html>