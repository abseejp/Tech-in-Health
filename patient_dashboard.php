
<?php include ('session.php');?>
<?php include ('header.php'); ?>

<body>
	<?php include ('navbar_patient.php'); ?>
	<div class="container">
		<div class="row">
    		<div class="col-lg-12">
                <h1 class="page-header" style="text-align: center;">Patient Dashboard</h1>	
    		</div>
        </div>
		<div class="row" style="text-align: center;">
			     <h3>Please type in complaint and send , we will get back to you</h3>
				<form class="form-horizontal" action="add_complaint.php" method="POST">

                    <div class="form-group">
                        <label for="complaint" class="col-sm-2 control-label">Complaint:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="complaint" rows="10" cols="30" id="complaint"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date" class="col-sm-2 control-label">Date:</label>
                        <div class="col-sm-4">
                            <input type="date" name="date" class="form-control" placeholder="Todays date" id="date">
                        </div>
                    </div>
                 
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-2">
                             <h3 class="page-header"><button type="submit" class="btn btn-block btn-primary btn-lg">Send Complain</button></h3>
                        </div>
                    </div>
                </form>
				
			</div>
			
		</div>
		<?php include 'footer.php'; ?>
	</div>
    <!-- connection to the javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>