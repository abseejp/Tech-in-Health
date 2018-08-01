<?php
include ('connection/db.php');
$id = $_POST['id'];
$query = "DELETE FROM nurse where nurse_id='$id'";
if (mysqli_query($con, $query)) {
    echo "<script type='text/javascript'>alert('Nurse Records Deleted Successfully!!!');</script>";
	echo "<script>document.location='nurse.php'</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
    echo "<script type='text/javascript'>alert('Records cannot be deleted');</script>";
}
?>