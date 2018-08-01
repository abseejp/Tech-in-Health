
<?php include ('session.php');?>
<?php include ('header.php'); ?>
<body>
	<?php include ('navbar_nurse.php'); ?>
	<div class="container">
    		<div class="row">
    			 <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Nurse Dashboard</h1>
            </div>	
    		</div>
		   
        <h3 align="center"> All Patient Records</h3>
        <hr>
		  <div class="row">
                <table class="table table-border" cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
                    <thead>
                      <tr class="info">
                        <th>S/N</th>
                        <th style="text-align: center;">FirstName</th>
                        <th style="text-align: center;">LastName</th>
                        <th style="text-align: center;">Complaint</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Gender</th>
                        <th style="text-align: center;">Phone</th>
                        <th>Action</th> 
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                     include('connection/db.php');

                        $query=mysqli_query($con,"select patient.patient_id, patient.first,patient.last,prescription.complaint,patient.phone,patient.email,patient.gender from patient INNER JOIN prescription ON patient.patient_id=prescription.patient_id")or die(mysqli_error($con));
                          while ($row=mysqli_fetch_array($query)){
                            $id=$row['patient_id'];
                            $last=$row['last'];
                            $first=$row['first'];
                            $complaint=$row['complaint'];
                            $email=$row['email'];
                            $gender=$row['gender'];
                            $phone=$row['phone'];
                           
                            
                      ?>                      
                          <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $first;?></td>
                            <td><?php echo $last;?></td>
                            <td><?php echo $complaint;?></td>
                            <td><?php echo $email;?></td>
                            <td><?php echo $gender;?></td>
                            <td><?php echo $phone;?></td>
                            
                           <td>
                                  <a href="#payment" class="btn btn-info" data-target="#payment<?php echo $id;?>" data-toggle="modal">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                  </a>
                            </td> 
                            </tr>
                            <!-- Modal -->
                            <div id="payment<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">Assign a Doctor</h4>
                                                      </div>
                                        <div class="modal-body" style="height:150px">
                                          <!--start form-->
                                          <form class="form-horizontal" method="post" action="dassign_save.php" enctype='multipart/form-data'>
                                              <!-- Title -->
                                              <input type="hidden" name="id" value="<?php echo $id;?>">
                                              <!-- Title -->
                                              <div class="form-group">
                                                  <label class="control-label col-lg-4" for="title">Doctors</label>
                                                  <div class="col-lg-8"> 
                                                    <select class="form-control select2" id="exampleSelect1" name="doc">
                                                           <?php
                                                            include 'connection/db.php';
                                                          $result = mysqli_query($con,"SELECT * FROM doctor ORDER BY doctor_id"); 
                                                              while ($row = mysqli_fetch_assoc($result)){
                                                                $doctor_id=$row['doctor_id'];
                                                                $dfirst=$row['first'];
                                                                $dlast=$row['last'];
                                                                $drole=$row['spec'];

                                ?>
                                <option value="<?php echo $row['doctor_id'];?>"><?php echo $doctor_id."  :  ".$dfirst." ".$dlast." | ".$drole; ?></option>
                        <?php } ?>
                        </select>
                      </div>
                  </div> <br>
                  
                  <br>         
                  <!-- Buttons -->
                  <div class="form-group">
                    <label class="control-label col-lg-4" for="title"></label>
                      <div class="col-lg-8"> 
                          <button type="submit" class="btn btn-primary" name="update">Assign</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                    </div>  
                  </div>
              </form>
              <!--end form-->
            </div>
           
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->  
<!-- Modal -->        
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
                        <th style="text-align: center;">Phone</th>
                        <th>Action</th>
                        
                      </tr>
                      </tr>
                    </tfoot>
                  </table>

			
			
		</div>
	</div>
    <?php include 'footer.php'; ?>

    <!-- codes to insert the javascript connection -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>