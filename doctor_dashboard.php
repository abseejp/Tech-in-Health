<?php include ('session.php');?>
<?php include ('header.php'); ?>
<body>
	<?php include ('navbar_doctor.php'); ?>
	<div class="container">
    		<div class="row">
    			       <div class="col-lg-12">
                    <h1 class="page-header" style="text-align: center;">Doctor's Dashboard</h1>
                 </div>	
    		</div>
        <h3 align="center"> Records of All Patients Assigned to <?php echo $session_id; ?></h3>
        <hr>
		    <div class="row">
                <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
                    <thead>
                      <tr class="info">
                        <th>S/N</th>
                        <th style="text-align: center;">FirstName</th>
                        <th style="text-align: center;">LastName</th>
                        <th style="text-align: center;">Complaint</th>
                        <th style="text-align: center;">Age</th>
                        <th style="text-align: center;">Gender</th>
                        <th style="text-align: center;">Drug</th>
                        <th style="text-align: center;">Instruction Use</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          include('connection/db.php');
                          $session_id=$_SESSION['id'];

                          $query = mysqli_query($con, "select doctor_id from doctor where email='$session_id'");
                          $row=mysqli_fetch_array($query);
                          $doctor_id =$row['doctor_id'];

                          $query=mysqli_query($con,"select patient.patient_id, patient.first,patient.last,prescription.complaint,prescription.drug,prescription.usage_desc,patient.age,patient.gender from patient INNER JOIN prescription ON patient.patient_id=prescription.patient_id where prescription.doctor_id='$doctor_id'")or die(mysqli_error($con));
                            while ($row=mysqli_fetch_array($query)){
                              $id=$row['patient_id'];
                              $last=$row['last'];
                              $first=$row['first'];
                              $complaint=$row['complaint'];
                              $age=$row['age'];
                              $gender=$row['gender'];
                              $drug=$row['drug'];
                              $usage_desc= $row['usage_desc'];
                             
                              
                      ?>                      
                      <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $first;?></td>
                        <td><?php echo $last;?></td>
                        <td><?php echo $complaint;?></td>
                        <td><?php echo $age;?></td>
                        <td><?php echo $gender;?></td>
                        <td><?php echo $drug;?></td>
                        <td><?php echo $usage_desc;?></td>
                        
                     <td>
                            <a href="#drugstore" class="btn btn-info" data-target="#drugstore<?php echo $id;?>" data-toggle="modal">
                              <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                      </td> 
                      </tr>
                      <!-- Modal -->
                        <div id="drugstore<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                      <h4 class="modal-title">Drug Prescription</h4>
                                    </div>
                                    <div class="modal-body" style="height:210px">
                                      <!--start form-->
              <form class="form-horizontal" method="post" action="presc_save.php" enctype='multipart/form-data'>
                    <!-- Title -->
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                          
                    <!-- Title -->
                    <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Drug</label>
                      <div class="col-lg-8"> 
                        <select class="form-control select2" id="exampleSelect1" name="drug">
                          <?php
                            include ('connection/db.php');
                            $result = mysqli_query($con,"SELECT * FROM drugs ORDER BY drug_id"); 
                            while ($row = mysqli_fetch_assoc($result)){
                            $drug_id=$row['drug_id'];
                            $drug_name=$row['drug_name'];
                            $drug_use=$row['treatment'];
                                      

                          ?>
                          <option value="<?php echo $row['drug_name'];?>"><?php echo $drug_id."  :  ".$drug_name." | ".$drug_use; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                  </div> <br><br>
                  <div class="form-group">
                    <label for="presc" class="col-lg-4 control-label">Usage Instruction:</label>
                    <div class="col-lg-8">
                        <textarea class="form-control" name="presc" rows="3" cols="30"></textarea>
                    </div>
                  </div><br><br><br><br>          
                  <!-- Buttons -->
                  <div class="form-group">
                    <label class="control-label col-lg-4" for="title"></label>
                      <div class="col-lg-8"> 
                          <button type="submit" class="btn btn-sm btn-primary" name="update">Update</button>
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
                        <th style="text-align: center;">Age</th>
                        <th style="text-align: center;">Gender</th>
                        <th style="text-align: center;">Drug</th>
                        <th style="text-align: center;">Instruction Use</th>
                        <th>Action</th>
                        
                      </tr>
                      </tr>
                    </tfoot>
                  </table>

			
			
		</div>
	</div>
  <?php include ('footer.php'); ?>

  <!-- code to insert the javascript file -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>