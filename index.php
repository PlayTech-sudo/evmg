<?php

$title = "home";
require "./template/indexheader.php";
include("./function/dbconn.php");

?>
<?php
   include("./function/dbconn.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($conn,$_POST['name']);
      $password=mysqli_real_escape_string($conn,$_POST['password']); 
    
      $sql = "SELECT id FROM user WHERE name = '$myusername' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         session_start("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: dash.php");
       }
        elseif(isset($_SESSION['name']) && $_SESSION['name'] == 'admin') {
        session_start("myusername");
         $_SESSION['login_user'] == "admin";
         
         header("location: dash.php");
       }
      else {
          echo "<script>alert('invalid username/password');
      window.location.href= 'index.php';</script>";
      }
    }
?>
<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    
  </nav>
  <div class="page-header header-filter" style="background-image: url('./assets/img/bg.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-sm-4 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
              </div><br>
                <p class="description text-center"></p>
                <div class="card-body">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="material-icons">face</i></span>
                    </div>
                    <input type="text" class="form-control" name="name" placeholder="User Name...">
                  </div><br>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="material-icons">lock_outline</i></span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password...">
                  </div><br>
                </div>
              <div class="footer text-center">
                <a href="#pablo" class="btn btn-primary btn-link btn-wd btn-lg"></a>
                <div id="buttons" class="cd-section">
              <div class="row">
                <div class="col-sm-6 ml-auto mr-auto">

                </div>
              </div>
              <button type="submit" name="login" class="btn btn-primary btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"></span></button>
              <button type="reset" name="cancel" class="btn btn-primary ">cancel<span class="btn-label btn-label-right"></span></button>
                
              <div class="title">
              </div>
            </form>
          </div>  
        </div>
      </div>
    </div>
<?php
require "./template/footer.php";
?>