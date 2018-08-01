<?php 
session_start();
include ('connection/db.php');
    
{
    
   $role=$_POST['role'];
   // role for the patient
   if ($role == 'Patient') {
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    // To protect MySQL injection
    $username = mysqli_real_escape_string( $con,$username);
    $password = mysqli_real_escape_string( $con,$password);
    $role = mysqli_real_escape_string( $con,$role);


    $fetch=mysqli_query($con, "select * from patient where email='$username' and password= '$password'");
    $count=mysqli_num_rows($fetch);
    if($count!="")
    {
    $_SESSION['id']=$username;
     echo "<script>document.location='patient_dashboard.php'</script>";
    }
    else
    {
       echo "<script>window.alert('Authentication failed!!!, Check your credentials')</script>";
       echo "<script>document.location='login.php'</script>";
    } 
   }
   // for the doctor
    elseif ($role == 'Doctor') {
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    // To protect MySQL injection
    $username = mysqli_real_escape_string( $con,$username);
    $password = mysqli_real_escape_string( $con,$password);
    $role = mysqli_real_escape_string( $con,$role);


    $fetch=mysqli_query($con, "select * from doctor where email='$username' and password= '$password'");
    $count=mysqli_num_rows($fetch);
    if($count!="")
    {
    $_SESSION['id']=$username;
     echo "<script>document.location='doctor_dashboard.php'</script>";
    }
    else
    {
       echo "<script>window.alert('Authentication failed!!!, Check your credentials')</script>";
       echo "<script>document.location='login.php'</script>";
    } 
    }
    // for the nurse
    elseif ($role == 'Nurse') {
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    // To protect MySQL injection
    $username = mysqli_real_escape_string( $con,$username);
    $password = mysqli_real_escape_string( $con,$password);
    $role = mysqli_real_escape_string( $con,$role);


    $fetch=mysqli_query($con, "select * from nurse where email='$username' and password= '$password'");
    $count=mysqli_num_rows($fetch);
    if($count!="")
    {
    $_SESSION['id']=$username;
     echo "<script>document.location='nurse_dashboard.php'</script>";
    }
    else
    {
       echo "<script>window.alert('Authentication failed!!!, Check your credentials')</script>";
       echo "<script>document.location='login.php'</script>";
    } 
    }
    // for the pharmacist
    elseif ($role == 'Pharmacy') {
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    // To protect MySQL injection
    $username = mysqli_real_escape_string( $con,$username);
    $password = mysqli_real_escape_string( $con,$password);
    $role = mysqli_real_escape_string( $con,$role);


    $fetch=mysqli_query($con, "select * from pharmacy where email='$username' and password= '$password'");
    $count=mysqli_num_rows($fetch);
    if($count!="")
    {
    $_SESSION['id']=$username;
     echo "<script>document.location='pharmacy_dashboard.php'</script>";
    }
    else
    {
       echo "<script>window.alert('Authentication failed!!!, Check your credentials')</script>";
       echo "<script>document.location='login.php'</script>";
    } 
    }

}
   



?>