<!DOCTYPE html>
<html>
<head>
	<title>test nav</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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


    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #00e64d;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

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
<nav class="guarant-menu">
	<div class="center-wrapper">
	<ul class="flex-wrapper">
		<li>a</li>
		<li>b</li>
		<li>c</li>
	</ul>
</div>
</nav>

<br>
<br>
<?php include'footer.php' ?>

<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="contact_process" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>