<?php

$con = mysqli_connect("localhost", "root", "");
	if(!$con){
		echo "Database connection failed :" . mysql_error();
		
	}
	
	$db_select = mysqli_select_db($con, "health");
	if(!$db_select){
		echo "Database selection failed :" . mysql_error();
	}
		else{
			echo "<script>alert('Form Submitted Successfully. We will get back to you Soon. Thank You!!!');</script>";
			echo "<script>document.location='index.php'</script>";
			
		
		$name=mysqli_real_escape_string($con, $_POST['name']);
		$email=mysqli_real_escape_string($con, $_POST['email']);
		$pnumber=mysqli_real_escape_string($con, $_POST['pnumber']);
		$feedback=mysqli_real_escape_string($con, $_POST['feedback']);
		
	}
   
$sql="INSERT INTO contact(name,email,pnumber,feedback)
VALUES('$name','$email`', '$pnumber`','$feedback')";
mysqli_query($con, $sql);

	
?>


