<?php 

include('connection/db.php');
	$id = $_POST['id'];
	$approval = $_POST['approval'];
	$date = date("Y-m-d H:i:s");
		
    
    	$sql = "UPDATE prescription SET approval='$approval', approved_date='$date' where patient_id='$id' and approval='awaiting'";
			$rs = mysqli_query($con,$sql) or die(mysqli_error($con));
			if ($rs) {
				echo "<script type='text/javascript'>alert('Patient Records Approved!!!');</script>";
				echo "<script>document.location='pharmacy_dashboard.php'</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('No field updated');</script>";
			}
	
?>