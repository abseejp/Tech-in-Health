  
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="patient_dashboard.php">Tech in Health</a>
          </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav pull-right">
                    <li>
                      <a href="patientAbout.php">About</a>
                    </li>
                
                    <li>
                      <li class="dropdown dropdown-big">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          <i class="fa fa-sign-in"></i> Complaints
                        </a>  
                        <ul class="dropdown-menu">
                           <li><a href="comp_sent.php"><i class="fa fa-sign-out"> Sent Complaints</i></a></li>            
                        </ul>              
                      </li> 
                    </li>
                
                    <li>
                        <a href="presc.php">Prescription</a>
                    </li>

                    <li>
                        <a href="patient_contactus.php">Contact</a>
                    </li>

                   <li class="dropdown dropdown-big">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          <span class="glyphicon glyphicon-user"></span> <?php echo $session_id; ?>
                        </a>  
                        <ul class="dropdown-menu">
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Log Out</a></li>            
                        </ul>              
                    </li> 
            </ul>
        </div>

        <!-- end of navbar-collapse -->
    </div>
    <!-- end of container  class -->
</nav> 