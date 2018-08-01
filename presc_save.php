<?php 

include('connection/db.php');
	$id = $_POST['id'];
	$drug = $_POST['drug'];
	$presc = $_POST['presc'];
		
    
    $sql = "UPDATE prescription SET drug='$drug', usage_desc='$presc' where patient_id='$id' and approval='awaiting'";
			$rs = mysqli_query($con,$sql) or die(mysqli_error($con));
			if ($rs) {
				echo "<script type='text/javascript'>alert('Drugs Updated Successfully!!!');</script>";
				echo "<script>document.location='doctor_dashboard.php'</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('No field updated');</script>";
			}
	
?>