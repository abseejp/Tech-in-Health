
<?php include ('session.php');?>
<?php include ('header.php'); ?>
<body>
	<?php include 'navbar_pharm.php'; ?>
	<div class="container">
      		<div class="row">
      			       <div class="col-lg-12">
                      <h1 class="page-header" style="text-align: center;">Pharmacist Dashboard</h1>
                   </div>	
      		</div>
      		
          <h3 align="center"> Records of All Patients </h3>
        <hr>
		<div class="row">
                <table class="table table-bordered" cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
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
                        <th style="text-align: center;">Approval</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
<?php
include('connection/db.php');

    $query=mysqli_query($con,"select patient.patient_id, patient.first,patient.last,prescription.complaint,prescription.drug,prescription.usage_desc,prescription.approval,patient.age,patient.gender from patient INNER JOIN prescription ON patient.patient_id=prescription.patient_id where prescription.status='Assigned'")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $id=$row['patient_id'];
        $last=$row['last'];
        $first=$row['first'];
        $complaint=$row['complaint'];
        $age=$row['age'];
        $gender=$row['gender'];
        $drug=$row['drug'];
        $usage_desc= $row['usage_desc'];
        $approval= $row['approval'];
       
        
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
                        <td><?php echo $approval;?></td>
                        
                     <td>
                            <a href="#drugapp" class="btn btn-info" data-target="#drugapp<?php echo $id;?>" data-toggle="modal">
                              <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                      </td> 
                      </tr>
<!-- Modal -->
<div id="drugapp<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Report Approval</h4>
            </div>
            <div class="modal-body" style="height:200px">
              <!--start form-->
              <form class="form-horizontal" method="post" action="med_app.php" enctype='multipart/form-data'>
                  <!-- Title -->
                  <input type="hidden" name="id" value="<?php echo $id;?>">
                  
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Drug</label>
                      <div class="col-lg-8"> 
                        <select class="form-control select2" id="exampleSelect1" name="approval">
                              
                                <option>Approved</option>
                             
                        
                        </select>
                      </div>
                  </div><br><br>
                  <div class="form-group">
                    <label for="date" class="col-lg-4 control-label">Date:</label>
                    <div class="col-lg-8">
                        <input type="date" name="date" class="form-control" placeholder="Date">
                    </div>
                </div><br><br>      
                  <!-- Buttons -->
                  <div class="form-group">
                    <label class="control-label col-lg-4" for="title"></label>
                      <div class="col-lg-8"> 
                          <button type="submit" class="btn btn-primary" name="update">Approve</button>
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
                        <th style="text-align: center;">Approval</th>
                        <th>Action</th>
                        
                      </tr>
                      </tr>
                    </tfoot>
                  </table>

			
			
		</div>
	</div>
    <?php include 'footer.php'; ?>

<!-- including the javascript connection  -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>