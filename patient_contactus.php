
<?php 
include ('session.php');
include ('navbar_patient.php');
include ('header.php');
include("connection/db.php");
 ?>
<!-- Link to the external css folder -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<center>
			   	<div class="container-fluid">
					     	<h1>Our Team contact Address  :</h1>
							    	<p>nHub Nigeria,</p>
							   		<p>3rd floor Teen Business Plaza,</p>
							   		<p>Jos.</p>
					   		<p>Phone:+2348163815935</p>
					 	 	<p>Email: <span>info@healthtech.com</span></p>
				</div>
			</center>
			<div class="container">		
				  	<h2>Contact Us</h2>
					<form method="POST" action="contact_processor.php" class="row">
						<div class="container">
						    	<div class="form-group col-sm-6">
							    	<label for="name">NAME:</label><br>
							    	<input type="text" name="name" class="form-control input-lg" id="name" required>
							    </div>
							   
							    <div class="form-group col-sm-6">
							    	<label for="email">E-MAIL:</label><br>
							    	<span><input type="email" name="email" class="form-control input-lg" id="email" required></span>
							    </div>

						    	<div class="form-group col-sm-6">
							     	<label for="pnumber">PHONE NUMBER:</label>
							    	<span><input type="number" name="pnumber" id="pnumber" class="form-control input-lg" required></span>
						    	</div>

						    	<div class="form-group col-sm-6">
							    	<label for="subject">SUBJECT:</label>
	                              	<textarea name="feedback" placeholder="Write something.." id="subject" class="form-control input-lg" required></textarea>

						   		</div>
							   <div class="form-group col-sm-1">
							   		<span><input type="submit" value="Submit" name="submit" class="form-control btn btn-success"></span>
							  </div>
						</div> 	
					 </form>
			</div>
			<?php include('footer.php')  ?>
			<!-- inclusion of the jQuery -->
    		<script src="js/jquery.js"></script>

    		<!-- inclusion of the Bootstrap Core JavaScript -->
    		<script src="js/bootstrap.min.js"></script>