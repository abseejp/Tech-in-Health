<?php
include ('session.php'); 
include ('connection/db.php');

	$complaint = $_POST['complaint'];
	$date = date("Y-m-d H:i:s");
	$session_id=$_SESSION['id'];

	$query = mysqli_query($con, "select patient_id from patient where email='$session_id'");
	$row=mysqli_fetch_array($query);
	$patient_id =$row['patient_id'];
	if ($complaint == "") {
		echo "<script type='text/javascript'>alert('you must fill  in your complain!!!');</script>";
			echo "<script>document.location='patient_dashboard.php'</script>";
	}else{

	
	$sql = "INSERT INTO prescription(complaint, patient_id, date_sent,status,approval) VALUES('$complaint','$patient_id','$date', 'Unsigned', 'awaiting')";
			$rs = mysqli_query($con,$sql) or die(mysqli_error($con));
			echo "<script type='text/javascript'>alert('Complaint Sent Successfully!!!');</script>";
			echo "<script>document.location='patient_dashboard.php'</script>";
			}
?>