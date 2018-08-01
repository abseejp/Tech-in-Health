<?php 

include('connection/db.php');
	$id = $_POST['id'];
	$drug_name = $_POST['drug_name'];
	$treatment = $_POST['treatment'];
		
    
    $sql = "UPDATE drugs SET drug_name='$drug_name', treatment='$treatment' where drug_id='$id'";
			$rs = mysqli_query($con,$sql) or die(mysqli_error($con));
			if ($rs) {
				echo "<script type='text/javascript'>alert('Drugs Updated Successfully!!!');</script>";
				echo "<script>document.location='drug_view.php'</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('No field updated');</script>";
			}
	
?>