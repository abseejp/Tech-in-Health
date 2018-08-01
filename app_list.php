
<?php include ('session.php');?>
<?php include ('header.php'); ?>
<body>
	<?php include 'navbar_nurse.php'; ?>
	<div class="container">
    		<div class="row">
    			 <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Appointment Dashboard</h1>
            </div>	
    		</div>
		    
        <h3 align="center">Records of All Patients Awaiting To be Assgined a Doctor</h3>
        <hr>
    		<div class="row">
                    <table class="table table-bordered" cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
                        <thead>
                          <tr class="info">
                            <th>S/N</th>
                            <th style="text-align: center;">FirstName</th>
                            <th style="text-align: center;">LastName</th>
                            <th style="text-align: center;">Complaint</th>
                            <th style="text-align: center;">Email</th>
                            <th style="text-align: center;">Gender</th>
                            <th style="text-align: center;">Status</th>
                            <th style="text-align: center;">Approval</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        include('connection/db.php');

                            $query=mysqli_query($con,"select patient.patient_id, patient.first,patient.last,prescription.complaint,prescription.status,prescription.approval,patient.email,patient.gender from patient INNER JOIN prescription ON patient.patient_id=prescription.patient_id where status='Unsigned'")or die(mysqli_error($con));
                              while ($row=mysqli_fetch_array($query)){
                                $id=$row['patient_id'];
                                $last=$row['last'];
                                $first=$row['first'];
                                $complaint=$row['complaint'];
                                $email=$row['email'];
                                $gender=$row['gender'];
                                $status=$row['status'];
                                $approval=$row['approval'];
                                
                        ?>                      
                      <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $first;?></td>
                        <td><?php echo $last;?></td>
                        <td><?php echo $complaint;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $gender;?></td>
                        <td><?php echo $status;?></td>
                        <td><?php echo $approval;?></td>
                      </tr>
                      <!-- Modal -->

                      <?php }?>
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>S/N</th>
                        <th style="text-align: center;">FirstName</th>
                        <th style="text-align: center;">LastName</th>
                        <th style="text-align: center;">Complaint</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Gender</th>
                        <th style="text-align: center;">Status</th>
                        <th style="text-align: center;">Approval</th>
                        
                      </tr>
                    </tfoot>
                  </table>	
		</div>
                  <hr>
                  <h3 align="center">Records of All patient with Doctors assigned</h3>
                  <hr>
                  <div class="row">
                <table class="table table-bordered" cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
                    <thead>
                      <tr class="info">
                        <th>S/N</th>
                        <th style="text-align: center;">FirstName</th>
                        <th style="text-align: center;">LastName</th>
                        <th style="text-align: center;">Complaint</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Gender</th>
                        <th style="text-align: center;">Status</th>
                        <th style="text-align: center;">Approval</th> 
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    include('connection/db.php');

                        $query=mysqli_query($con,"select patient.patient_id, patient.first,patient.last,prescription.complaint,prescription.status,prescription.approval,patient.email,patient.gender from patient INNER JOIN prescription ON patient.patient_id=prescription.patient_id where status='Assigned'")or die(mysqli_error($con));
                          while ($row=mysqli_fetch_array($query)){
                            $id=$row['patient_id'];
                            $last=$row['last'];
                            $first=$row['first'];
                            $complaint=$row['complaint'];
                            $email=$row['email'];
                            $gender=$row['gender'];
                            $status=$row['status'];
                            $approval=$row['approval'];
                            
                    ?>                      
                      <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $first;?></td>
                        <td><?php echo $last;?></td>
                        <td><?php echo $complaint;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $gender;?></td>
                        <td><?php echo $status;?></td>
                        <td><?php echo $approval;?></td>
                      </tr>
                       <?php }?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <tr>
                        <th>S/N</th>
                        <th style="text-align: center;">FirstName</th>
                        <th style="text-align: center;">LastName</th>
                        <th style="text-align: center;">Complaint</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Gender</th>
                        <th style="text-align: center;">Status</th>
                        <th style="text-align: center;">Approval</th>
                        
                      </tr>
                      </tr>
                    </tfoot>
                  </table>

      
      
    </div>
	</div>
    <?php include ('footer.php'); ?>

    <!-- connection to the javascript folder -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>