<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="pharmacy_dashboard.php">Tech in Health</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav pull-right">
        <li>
            <a href="pharmacy_about.php">About</a>
        </li>
        
        <li>
            <a href="pharmacy_dashboard.php">Patient</a>
        </li>
        <li>
              <a href="drug_view.php">Drugs</a>
                              
        </li>
        <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-user"></span> <?php echo $session_id; ?>
              </a>  
              <ul class="dropdown-menu">
                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>            
              </ul>              
        </li> 
    </ul>
</div>
</div>
    
</nav> 
