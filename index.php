
<?php include ('header.php'); ?>
<?php include ('navbar.php'); ?>

<body>
    <!-- Page Content -->
    <div class="container">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="font-size: 50px;">Hospital Management System </h1>
                    </div>
                </div>
                <!-- closing of the row -->


                <!-- including the carousel and Definition of terms-->
                <div class="row">
                    <div class="col-md-6">
                        <!-- including the slider page -->
                        <?php include('slider.php');?>
                    </div>
                    <div class="col-md-6" style="font-size: 20px;">
                        <h4 style="font-size: 45px;">Definition of Terms</h4>
                        <p>
                            <b>Hospital Management System(HMS):</b> HMS is a health care institution providing patient treatment by specialised staffs.<br><br>
                            <b>Patients:</b> A person who receives treatment from a doctor or other medically educated person.<br><br>
                            <b>Managements:</b>is the organization and coordination of the activities of a business in order to achieve the desired goals.<br><br>
                            <b>Tech in Health:</b> Applying technology in health sector.<br>

                        </p>
                    </div>
                </div>
    </div>
    <!-- closing of the container class -->

    <!-- including the footer page -->
    <?php require ('footer.php'); ?>
    

    <!-- inclusion of the jQuery -->
    <script src="js/jquery.js"></script>

    <!-- inclusion of the Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
