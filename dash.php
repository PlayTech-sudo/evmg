<?php
$title = "home";
require "./template/dashhead.php";
include("./function/dbconn.php");

?>

<body class="">
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
      <!-- End Navbar -->

    <hr>  <div class="content">
        
        <div class="container-fluid">
            
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">create</i>
                  </div>
                  <p class="card-category"></p>
                  <h3 class="card-title"><b>EVENT</b>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <!--<i class="material-icons text-warning">create</i>
                    <a href="#pablo">Get More Space..</a>-->
                    <a href="create_ent.php" class="btn btn-warning " role="button" aria-pressed="true">Create</a>
                    
                  </div>
                </div>
              </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">save_alt</i>
                  </div>
                  <p class="card-category"></p>
                  <h3 class="card-title"><b>ENTITIES</b></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   <a href="take_entity.php" class="btn btn-success " role="button" aria-pressed="true">Take Entities
                   </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">storage</i>
                  </div>
                  <p class="card-category"></p>
                  <h3 class="card-title"><b>ORGANIZE</b></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="manage_entity.php" class="btn btn-danger " role="button" aria-pressed="true">Manage Entries</a>
                    <a href="take_payment.php" class="btn btn-danger " role="button" aria-pressed="true">Take payment</a>
                      <a href="Update.php" class="btn btn-danger " role="button" aria-pressed="true">Update Status</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                     <i class="material-icons">class</i>
                  </div>
                  <p class="card-category"></p>
                  <h3 class="card-title"><b>REPORT</b></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   <a href="reports.php" class="btn btn-info" role="button" aria-pressed="true">Reports</a>                 
                    </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      
    </div>
  </div>
  
      </div>  
<?php
require "./template/dashfooter.php";
?>
 
