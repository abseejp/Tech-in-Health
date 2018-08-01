<?php include ('header.php'); ?>

<?php include ('navbar.php'); ?>

<body>

<div class="container">
  <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="text-align: center;">Fill the Form to Create Account</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal" action="register.php" method="post">
                    <!-- for the first name and the last name -->
                <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label" >First Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="first" id="firstname" class="form-control" placeholder="Enter your first name" required>
                    </div>

                    <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="last" id="lastname" placeholder="Enter your last name" class="form-control" required>
                    </div>
                </div>

                    <!-- for email and password -->
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email Address</label>
                    <div class="col-sm-4">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address" required>
                    </div>

                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-4">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter a strong password" required>
                    </div>
                </div>

                    <!-- for address -->
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" id="address" name="address" class="form-control" placeholder="Enter your address" required>
                    </div>
                </div>

                    <!-- for age and phone number -->
                <div class="form-group">
                    <label for="age" class="col-sm-2 control-label">Age</label>
                    <div class="col-sm-4">
                        <input type="number" id="age" name="age" class="form-control" required>
                    </div>
                    <label for="phone" class="col-sm-2 control-label">Phone:</label>
                    <div class="col-sm-4">
                        <input type="number" id="phone" name="phone" class="form-control" required>
                    </div>
                </div>

                    <!-- for sex and who are you -->
                <div class="form-group">
                    <label for="whoareyou" class="col-sm-2 control-label">Who are You</label>
                    <div class="col-sm-4">
                        <select name="role" id="whoareyou" class="form-control" required>
                            <option>Patient</option>
                            <option>Doctor</option>
                            <option>Nurse</option>
                            <option>Pharmacist</option>
                        </select>
                    </div>

                     <label for="sex" class="col-sm-2 control-label">Sex</label>
                    <div class="col-sm-4">
                        <select name="gender" id="sex" class="form-control" required>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div> 
                </div>

                    <!-- for specialization and Doctors code -->
                 <div class="form-group">
                    <label for="Specialization" class="col-sm-2 control-label">Specialization</label>
                    <div class="col-sm-4">
                    <p style="color: red;">* For Doctors only</p>
                         <select name="spec" id="Specialization" class="form-control">
                            <option>Surgeon</option>
                            <option>Dentist</option>
                            <option>Optician</option>
                            <option>Gynealcologist</option>
                        </select>
                    </div>
                
                    <label for="doctorcode" class="col-sm-2 control-label">Enter your Doctors reg Code</label>
                    <div class="col-sm-4">
                         <p style="color: red;">* For Doctors only</p>
                        <input type="text" id="doctorcode" name="doctor_regcode" class="form-control">
                    </div>    
                </div>
                 
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>

</div>
</div>
</div>
<?php include 'footer.php'; ?>  
          
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>