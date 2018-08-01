<?php include ('session.php');?>
<?php include ('header.php'); ?>
<body>
    <?php include ('navbar_patient.php'); ?>
    <div class="container">
        <div class="row">
             <div class="col-lg-12">
                <h1 class="page-header" style="text-align: center;">Prescription Dashboard</h1>
             </div> 
        <hr>
        <h3 align="center">Prescriptions </h3>
        <hr>
        <div class="row">
                <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
                    <thead>
                      <tr class="info">
                        <th>S/N</th>
                        <th style="text-align: center;">FirstName</th>
                        <th style="text-align: center;">LastName</th>
                        <th style="text-align: center;">Complaint</th>
                        <th style="text-align: center;">Drug</th>
                        <th style="text-align: center;">Instruction Use</th>
                        <th style="text-align: center;">Approval</th>  
                      </tr>
                    </thead>
                <tbody>
                    <?php
                        include('connection/db.php');

                        $session_id=$_SESSION['id'];
                        $query = mysqli_query($con, "select patient_id from patient where email='$session_id' ");
                        $row=mysqli_fetch_assoc($query);
                        $patient_id =$row['patient_id'];

                        $query1=mysqli_query($con,"select patient.patient_id, patient.first,patient.last,prescription.complaint,prescription.drug,prescription.usage_desc,prescription.approval from patient INNER JOIN prescription ON patient.patient_id=prescription.patient_id where prescription.patient_id='$patient_id'")or die(mysqli_error($con));
                        while ($row1=mysqli_fetch_assoc($query1)){
                            $id=$row1['patient_id'];
                            $last=$row1['last'];
                            $first=$row1['first'];
                            $complaint=$row1['complaint'];
                            $drug=$row1['drug'];
                            $usage_desc= $row1['usage_desc'];
                            $approval= $row1['approval'];
                           
                  
                                ?>                      
                                  <tr>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo $first;?></td>
                                    <td><?php echo $last;?></td>
                                    <td><?php echo $complaint;?></td>
                                    <td><?php echo $drug;?></td>
                                    <td><?php echo $usage_desc;?></td>
                                    <td><?php echo $approval;?></td>
                                    
                                  </tr>
                        <?php }?> 
                    <!-- Modal -->
                </tbody>
                <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th style="text-align: center;">FirstName</th>
                        <th style="text-align: center;">LastName</th>
                        <th style="text-align: center;">Complaint</th>
                        <th style="text-align: center;">Drug</th>
                        <th style="text-align: center;">Instruction Use</th>
                        <th style="text-align: center;">Approval</th>                      
                    </tr>
                </tfoot>
                  </table>    
            
        </div>
        </div>
    </div>
        <?php include ('footer.php'); ?>
    <!-- codes to  connect to the javascript file -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>