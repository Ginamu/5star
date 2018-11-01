		<div class="col-md-6 col-md-offset-3" >
  <form action="process_order.php" method="post">
  	<br>
  	<br>
    <h1>Order</h1>

    <label for="email">Email</label>
    <input type="text" placeholder="Enter Email" name="email" required>

     <label for="topic"><b>Topic</b></label>
     <input type="text" placeholder="Enter Topic" name="topic" required>

     <select name="type" id="document">
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

     <select name="urgency">
     	<option value="10days">10 Days</option>
     	<option value="7days">7 Days</option>
     	<option value="5days">5 Days</option>
     	<option value="4days">4 Days</option>
     	<option value="3days">3 Days</option>
     	<option value="2days">2 Days</option>
     	<option value="24hours">24 hours</option>
     	<option value="12hours">12 hours</option>
     	<option value=""></option>
     	<option value=""></option>
     </select>

     <label for="pages"><b>Number of pages</b></label>
     <input type="text" placeholder="Number of pages" name="pages" required>

     <label for="instructions"><b>Your Instructions</b></label>
     <textarea name="instructions" id="instructions" cols="30" rows="10"></textarea>

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


    <div class="clearfix">
      <button type="submit" class="signupbtn" name="submit">Order</button>
    </div>
 
</form>
</div>
</div>