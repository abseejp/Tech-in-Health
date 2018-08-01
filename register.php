<?php
session_start();
include ('connection/db.php');

{
	$role = $_POST['role'];
    // for the patient
	if ($role == 'Patient') {
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];

    $string="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$code="";
	$limit=10;
	$i=0;
	while($i<=$limit)
	{
		$rand=rand(0,61);
		$code.=$string[$rand];
		$i++;
	}

    $first = mysqli_real_escape_string( $con,$first);
    $last = mysqli_real_escape_string( $con,$last);
    $email = mysqli_real_escape_string( $con,$email);
    $password = mysqli_real_escape_string( $con,$password);
    $phone = mysqli_real_escape_string( $con,$phone);
    $address = mysqli_real_escape_string( $con,$address);
    $gender = mysqli_real_escape_string( $con,$gender);
    $age = mysqli_real_escape_string( $con,$age);
    $role = mysqli_real_escape_string( $con,$role);

    $query = "INSERT INTO patient(r_code, last, first, address, phone, email, password, age, gender) 
			VALUES('$code','$last','$first','$address','$phone','$email','$password','$age','$gender');";
		

			if (mysqli_query($con, $query)) {
				$id=mysqli_insert_id($con);
			$_SESSION['patient_id']=$id;
			echo "<script>window.alert('Registration is Successfully!!!')</script>";
            echo "<script>document.location='login.php'</script>";
           } else {
             echo "Error: " . $query . "<br>" . mysqli_error($con);
           }
	}/*end of insert statement for patient*/
	
    // for the doctor
	elseif ($role == 'Doctor') {
		$first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $spec = $_POST['spec'];
        $doctor_regcode = $_POST['doctor_regcode']; 

        //condition to check that the regcode musnt be empty
        if ($doctor_regcode=='') {
            echo "<script>window.alert('Regcode field must not be empty!!!')</script>";
            echo "<script>document.location='index.php'</script>";
        }else{

    $first = mysqli_real_escape_string( $con,$first);
    $last = mysqli_real_escape_string( $con,$last);
    $email = mysqli_real_escape_string( $con,$email);
    $password = mysqli_real_escape_string( $con,$password);
    $phone = mysqli_real_escape_string( $con,$phone);
    $address = mysqli_real_escape_string( $con,$address);
    $gender = mysqli_real_escape_string( $con,$gender);
    $age = mysqli_real_escape_string( $con,$age);
    $role = mysqli_real_escape_string( $con,$role);
    $spec = mysqli_real_escape_string( $con,$spec);
    $doctor_regcode = mysqli_real_escape_string( $con,$doctor_regcode);


    $query = "INSERT INTO doctor(doctor_regcode,first,last,email,password,spec,gender,age,phone,address) 
			VALUES('$doctor_regcode','$first','$last','$email','$password','$spec','$gender','$age','$phone','$address');";
		

			if (mysqli_query($con, $query)) {
				$id=mysqli_insert_id($con);
			$_SESSION['doctor_id']=$id;
            echo "<script>window.alert('Registration is Successfully!!!')</script>";

            echo "<script>document.location='login.php'</script>";
           } else {
             echo "Error: " . $query . "<br>" . mysqli_error($con);
           }
	}
        }/*end of insert statement for doctor*/
	elseif ($role == 'Nurse') {
		$first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        

    $first = mysqli_real_escape_string( $con,$first);
    $last = mysqli_real_escape_string( $con,$last);
    $email = mysqli_real_escape_string( $con,$email);
    $password = mysqli_real_escape_string( $con,$password);
    $phone = mysqli_real_escape_string( $con,$phone);
    $address = mysqli_real_escape_string( $con,$address);
    $gender = mysqli_real_escape_string( $con,$gender);
    $age = mysqli_real_escape_string( $con,$age);
    $role = mysqli_real_escape_string( $con,$role);

    $query = "INSERT INTO nurse(last, first, address, phone, email, password, age, gender) 
			VALUES('$last','$first','$address','$phone','$email','$password','$age','$gender');";
		

			if (mysqli_query($con, $query)) {
				$id=mysqli_insert_id($con);
			$_SESSION['nurse_id']=$id;
			echo "<script>window.alert('Registration is Successfully!!!')</script>";

            echo "<script>document.location='login.php'</script>";
           } else {
             echo "Error: " . $query . "<br>" . mysqli_error($con);
           }
	}/*end of insert statement for nurse*/

    // for the pharmacy
	elseif ($role == 'Pharmacy') {
		$first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        

    $first = mysqli_real_escape_string( $con,$first);
    $last = mysqli_real_escape_string( $con,$last);
    $email = mysqli_real_escape_string( $con,$email);
    $password = mysqli_real_escape_string( $con,$password);
    $phone = mysqli_real_escape_string( $con,$phone);
    $address = mysqli_real_escape_string( $con,$address);
    $gender = mysqli_real_escape_string( $con,$gender);
    $age = mysqli_real_escape_string( $con,$age);
    $role = mysqli_real_escape_string( $con,$role);

    $query = "INSERT INTO pharmacy(last, first, address, phone, email, password, age, gender) 
			VALUES('$last','$first','$address','$phone','$email','$password','$age','$gender');";
		

			if (mysqli_query($con, $query)) {
				$id=mysqli_insert_id($con);
			$_SESSION['pharm_id']=$id;
			echo "<script>window.alert('Registration is Successfully!!!')</script>";

            echo "<script>document.location='login.php'</script>";
           } else {
             echo "Error: " . $query . "<br>" . mysqli_error($con);
           }
	}
}
?>