<?php include ('session.php');?>
<?php include ('header.php'); ?>
<body>
	<?php include 'navbar_pharm.php'; ?>
	<div class="container">
		<div class="row">
			 <div class="col-lg-12">
                <h1 class="page-header" style="text-align: center;">Drug Dashboard</h1>
        </div>	
		</div>
     <div class="row">
        <h3 align="center">you can add new drugs here</h3>
        <div class="col-md-7 col-sm-offset-2">
               <form class="form-horizontal" action="drug_add.php" method="POST">
                <div class="form-group">
                    <label for="drdrug" class="col-sm-2 control-label">Drug:</label>
                    <div class="col-sm-4">
                        <input type="text" name="drdrug" class="form-control" required>
                    </div>
                    <label class="col-sm-2 control-label">Treatment:</label>
                    <div class="col-sm-4">
                        <input type="text" name="drtre" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-6 col-sm-4">
                        <button type="submit" class="btn btn-warning">Add Drug</button>
                    </div>
                </div>
            </form>
        
        </div>
    </div>
        <h3 align="center"> Available Drugs in the Pharmacy</h3>
        <hr>
   
		<div class="row">
                <table class="table table-bordered" cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
                    <thead>
                      <tr class="info">
                        <th>S/N</th>
                        <th style="text-align: center;">Drug</th>
                        <th style="text-align: center;">Treatment</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    include('connection/db.php');

                        $query=mysqli_query($con,"select * from drugs")or die(mysqli_error($con));
                          while ($row=mysqli_fetch_array($query)){
                            $id=$row['drug_id'];
                            $drug=$row['drug_name'];
                            $treatment=$row['treatment'];
                                    
                    ?>                      
                    <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $drug;?></td>
                      <td><?php echo $treatment;?></td>
                                            
                      <td>
                          <a href="#drug_modal" class="btn btn-info" data-target="#drug_modal<?php echo $id;?>" data-toggle="modal">
                          <span class="glyphicon glyphicon-pencil"></span> 
                          </a>
                      </td> 
                    </tr>
        <!-- Modal -->
        <div id="drug_modal<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title">Update Drugs</h4>
                    </div>
                    <div class="modal-body" style="height:200px">
                      <!--start form-->
                      <form class="form-horizontal" method="post" action="drug_edit.php" enctype='multipart/form-data'>
                          <!-- Title -->
                          <input type="hidden" name="id" value="<?php echo $id;?>">
                          
                          <div class="form-group">
                            <label for="date" class="col-lg-4 control-label">Drug:</label>
                            <div class="col-lg-8">
                                <input type="text" name="drug_name" class="form-control" value="<?php echo $drug;?>">
                            </div>
                          </div><br><br>

                          <div class="form-group">
                            <label for="date" class="col-lg-4 control-label">Treatment:</label>
                            <div class="col-lg-8">
                                <input type="text" name="treatment" class="form-control" value="<?php echo $treatment;?>">
                            </div>
                          </div><br><br>
                          
                                 
                          <!-- Buttons -->
                          <div class="form-group">
                            <label class="control-label col-lg-4" for="title"></label>
                              <div class="col-lg-8"> 
                                  <button type="submit" class="btn btn-primary" name="update">Update</button>
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
                        <th style="text-align: center;">Drug</th>
                        <th style="text-align: center;">Treatment</th>
                        <th>Action</th>
                        
                      </tr>
                      </tr>
                    </tfoot>
                  </table>

			
			
		</div>
	</div>
    <?php include ('footer.php'); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>