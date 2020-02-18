<?php
$title = "home";
require "./template/dashhead.php";
include("./function/dbconn.php");
?>

<body>
 <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="./assets/img/sidebar-1.jpg">
      
      <div class="logo">
        <h3>
          <center><b>EAS<br>Event Automation System</b> </center></h3>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dash.php">
              <i class="material-icons">dashboard</i>
              <p>DASHBOARD</p>  
              </a>      
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./addcategory.php">
              <i class="material-icons">list</i>
              <p>CATEGORY</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./addstatus.php">
              <i class="material-icons">donut_large</i>
              <p>STATUS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./addpriority.php">
              <i class="material-icons">dns</i>
              <p>PRIORITY</p>
            </a>
          </li>
          <li class="nav-item ">
            <a  class="nav-link" href="./adduser.php">
                <i class="material-icons">layers</i>
              <p>ADD USER</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./com_info.php">
              <i class="material-icons">info</i>
              <p>COMPANY INFORMATION</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#"><b>Dashboard</b></a>
          </div><button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              
            </form>
            <ul class="navbar-nav">
         
          <div class="navbar-wrapper">
            
            <button type="button" class="btn btn-link"><b><h5><i class="material-icons">power_settings_new</i> <a href="./index.php">LOGOUT</a></h5></b></button>
          </div>
        </div><hr>
      </nav>

  <br><br><br><br><br><br><br><br><br>
      <div class="row">
        <div class="col-sm-2 col-sm-5 ml-auto mr-auto">
          <div class="card">
            <form class="form" method="POST" action="">
              <div class="card-header card-header-info text-center">
                <h4 class="card-title">REPORTS</h4>
              </div><br>
               <hr>  <div class="content">
        
       				 <div class="container-fluid">
       				 	 <div class="row">
           <!-- <div class="col-lg-6 col-md-6 col-sm-6">
            
              <span class="input-group-text">
                      <a href="statistical.php" class="btn btn-info" role="button" aria-pressed="true">Statistical Report</a>
                    </span>
                </div>-->
                <div class="col-lg-4 col-md-4 col-sm-4">
            <span class="input-group-text" >
                      <a href="entries.php" class="btn btn-info" role="button" aria-pressed="true">Entries Report </a>               
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
					<span class="input-group-text">
                      <a href="statusreport.php" class="btn btn-info" role="button" aria-pressed="true">Status Report</a>               
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
               <span class="input-group-text">
                   <a href="payment.php" class="btn btn-info" role="button" aria-pressed="true">Payment Report</a>                   
                    </span>
                  
               </div>
             
           </div>
       </div>

                
             
            </div>

            </div>
        </div>
      
        
              
          
            </form>
         </div>
       </div>
     </div>
 <?php
   require "./template/footer.php";
   ?>