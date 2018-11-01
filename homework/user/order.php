<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap.css"/>

    <link rel="stylesheet" href="css/mine.css"/>
    <link rel="stylesheet" href="css/a.css">

<script src="js/a.js"></script>	

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

	<div class="container">
    <br>
    <br>
    <div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>
		
<form action="process_order.php" method="post" role='form'>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Step 1</h3>
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-group" maxlength="100" placeholder="Enter name" name="name" required>
                <br>    
                <br>    
                     <label for="email">Email</label>
    <input maxlength="100" type="text" placeholder="Enter Email" name="email" class="form-group" required>
    <br>    
    <br>    
<label for="topic"><b>Topic</b></label>
     <input type="text" placeholder="Enter Topic" name="topic" required>
 
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

                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" name="submit">Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12"> 
      <h3>  Step 2</h3>
      <div class="form-group"> 
       <label for="instructions"><b>Brief description</b></label>
     <textarea name="instructions" id="instructions" cols="30" rows="10"></textarea>
     <br>   
     <br>   
      <label for="style"><b>Style</b></label>
     <select name="style">
        <option value="APA">APA</option>
        <option value="MLA">MLA</option>
        <option value="Turabian">Turabian</option>
        <option value="Chicago">Chicago</option>
        <option value="Havard">Havard</option>
        <option value="Oxford">Oxford</option>
        <option value="Vancouver">Vancouver</option>
     </select>

       </div>
        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" name="submit" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3" >
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>
                    <div class="form-group">  
         <div class="clearfix">
      <button type="submit" class="signupbtn" name="submit">Order</button>
    </div>
 
                    </div>
            
            </div>
        </div>
    </div>
</form>
</div>


<?php include 'footer.php' ?>

</body>
</html>