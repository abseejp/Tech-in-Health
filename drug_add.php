<?php
include ('connection/db.php');
session_start();

$drdrug = $_POST['drdrug'];
$drtre = $_POST['drtre'];

$query = "INSERT INTO drugs (drug_name, treatment) VALUES('$drdrug','$drtre')";
$rs = mysqli_query($con,$query) or die(mysqli_error($con));
			echo "<script type='text/javascript'>alert('Records Inserted Successfully!!!');</script>";
			echo "<script>document.location='drug_view.php'</script>";
?>
