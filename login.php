
<?php include 'header.php'; ?>
<!-- connect with the navigation bar -->
<?php include('navbar.php'); ?>
<body>
<!-- Page Content -->
<div class="container">
    
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Login or Create Account</h1>
        </div>
    </div>
    <!-- /.row -->

    
    <div class="row">
        <div class="col-md-5">
            <!-- the login form starts here-->

            <form class="form-horizontal" action="signin.php" method="POST">
                    <!-- the username field -->
                <div class="form-group">
                    <label for="username" class="col-sm-4 control-label">Username:</label>
                    <div class="col-sm-8">
                        <input type="text" name="username" class="form-control" placeholder="Enter Your email" id="username">
                    </div>
                </div>
                    <!-- The password field -->
                <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" placeholder="Enter Your password" id="password">
                    </div>
                </div>
                    <!-- The field for who are you -->
                <div class="form-group">
                    <label class="col-sm-4 control-label">Who are you</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="role">
                            <option>Select</option>
                            <option>Patient</option>
                            <option>Doctor</option>
                            <option>Nurse</option>
                            <option>Pharmacy</option>
                        </select>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-10">
                        <button type="submit" class="btn btn-warning">Login</button>
                    </div>
                </div>
                <h3 class="page-header">Have no account? <button type="button" class="btn btn-primary"><a href="signup.php" style="color: #ffffff">Create Account</a></button></h3>
            </form>
       </div>
    </div>
</div>
    <?php include('footer.php'); ?>

    <!-- connect to the jQuery -->
    <script src="js/jquery.js"></script>

    <!--connect to the Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
