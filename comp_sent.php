
<?php include 'session.php';?>
<?php include 'header.php'; ?>
<body>
	<?php include 'navbar_patient.php'; ?>
	<div class="container">
		<div class="row">
			 <div class="col-lg-12">
                <h1 class="page-header" style="text-align: center;">Sent Complaint Dashboard</h1>
		      </div>
		      <hr>
              <!-- the $session_id is set as the email address of the patient -->
            <h3 align="center"> All Sent Complaints by <?php echo $session_id; ?></h3>
            <hr>
		<div class="row"> 
                <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
                    <thead>
                          <tr class="info">
                            <th>S/N</th>
                            <th style="text-align: center;">FirstName</th>
                            <th style="text-align: center;">LastName</th>
                            <th style="text-align: center;">Complaint</th>
                            <th style="text-align: center;">Date Sent</th>
                            <th style="text-align: center;">Approval</th>
                            <th style="text-align: center;">Date Approved</th>
                                                  
                          </tr>
                    </thead>
                    <tbody>
                            <?php
                                include('connection/db.php');
                                  $session_id=$_SESSION['id'];
                                  $query = mysqli_query($con, "select patient_id from patient where email='$session_id' ");
                                    $row1=mysqli_fetch_assoc($query);
                                    $patient_id =$row1['patient_id'];


                                    $query =mysqli_query($con,"select patient.patient_id, patient.first,patient.last,prescription.complaint,prescription.status,prescription.date_sent,prescription.approval,prescription.approved_date from patient INNER JOIN prescription ON patient.patient_id=prescription.patient_id where prescription.patient_id='$patient_id'")or die(mysqli_error($con));
                            while ($row3=mysqli_fetch_assoc($query)){
                                            $id=$row3['patient_id'];
                                            $first=$row3['first'];
                                            $last=$row3['last'];
                                            $complaint=$row3['complaint'];
                                            $date_sent=$row3['date_sent'];
                                            $approval= $row3['approval'];
                                            $approved_date=$row3['approved_date'];
                          
                            ?>                      
                                          <tr>
                                            <td><?php echo $id;?></td>
                                            <td><?php echo $first;?></td>
                                            <td><?php echo $last;?></td>
                                            <td><?php echo $complaint;?></td>
                                            <td><?php echo $date_sent;?></td>
                                            <td><?php echo $approval;?></td> 
                                            <td><?php echo $approved_date;?></td>
                                          </tr>
                            <?php }?> 
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th style="text-align: center;">FirstName</th>
                            <th style="text-align: center;">LastName</th>
                            <th style="text-align: center;">Complaint</th>
                            <th style="text-align: center;">Date Sent</th>
                            <th style="text-align: center;">Approval</th>
                            <th style="text-align: center;">Date Approved</th>
                      </tr>
                    </tfoot>
                </table>
			
		</div>
	</div>
</div>
        <?php include ('footer.php'); ?>
    <!-- the code to connect to the javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>