<?php 

include('connection/db.php');
	$id = $_POST['id'];
	$doc = $_POST['doc'];
		
    
    	$sql = "UPDATE prescription SET doctor_id='$doc', status='Assigned' where patient_id='$id'";
			$rs = mysqli_query($con,$sql) or die(mysqli_error($con));
			if ($rs) {
				echo "<script type='text/javascript'>alert('Successfully assigned a doctor!!!');</script>";
				echo "<script>document.location='app_list.php'</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('No field updated');</script>";
			}
			


		/*mysqli_query($con,"UPDATE prescription SET doctor_id='$doc' and status='Assigned' where patient_id='$pat'")or die(mysqli_error($con)); 


			echo "<script type='text/javascript'>alert('Successfully assigned a Doctor!');</script>";*/
			/*echo "<script>document.location='nurse_dashboard.php'</script>"; */  
	
?>