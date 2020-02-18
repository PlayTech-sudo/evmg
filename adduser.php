<?php
$title = "home";
require "./template/dashhead.php";
?>

<?php
include("./function/dbconn.php");
   session_start();// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
    
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$rptpassword =mysqli_real_escape_string($conn, $_REQUEST['rptpassword']);
if($password!=$rptpassword)
{
echo "<script>alert('Passwords must match');
      window.location.href= 'adduser.php';</script>";
// Attempt insert query execution
    }
    else
    {
$sql = "INSERT INTO user(name,password) 
VALUES ('$name', '$password')";

if(mysqli_query($conn, $sql)=="TRUE"){
     echo "<script>alert('user added successfully');
      window.location.href= 'index.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}


}
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
            <a href="./adduser.php" class="nav-link">
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
            
            <ul class="navbar-nav">
         
          <div class="navbar-wrapper">
            
            <button type="button" class="btn btn-link"><b><h5><i class="material-icons">power_settings_new</i> <a href="./index.php">LOGOUT</a></h5></b></button>
          </div>
        </div><hr>
      </nav>
      <!-- End Navbar -->
      <br><br><br><br><br><br><br><br>
  
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-sm-4 ml-auto mr-auto">
          <div class="card card-login">
            <form action="" class="form" method="POST" >
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">add user</h4>
              </div><br>

              <p class="description text-center"></p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="User Name..." name="name"  required>
                </div><br>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password..." name="password" required>
                </div> <br>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="confirm Password..." name="rptpassword" required>
                </div> <br>
              </div>
              <div class="footer text-center">
                
           
            
<center>            <button type="button" class="btn btn-link"><a href="./dash.php">Back</a></button>
            <button class="btn btn-primary" name="submit">SUBMIT<div class="ripple-container"></div></button>
             <button class="btn btn-primary" name="cancel" value="CANCEL" type="reset">CANCEL</button>
            </center>
       
           </div>
              </div>
            </form>
          </div>  
        </div>
      </div>
    </div>  
     <hr> 
<?php
require "./template/dashfooter.php";
?>
 
