<?php
$title = "home";
require "./template/dashhead.php";
include("./function/dbconn.php");
?>
<?php
include("./function/dbconn.php");
   session_start();// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query1="select * from status";
  $result1=mysqli_query($conn,$query1);
 ?>


<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" style="background-image: url('./assets/img/bg.jpg'); background-size: cover; background-position: top center;">
   
    <div class="container">
      <div class="row">
        
        <div class="col-sm-2 col-sm-10 ml-auto mr-auto">
          <br><br><br><br><br><br><br><br>
          <div class="card">
            <form class="form" method="POST" action="stable.php">

              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Status Report</h4>
              </div>
              <p class="description text-center"></p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> Select Status:
                <!--<i class="material-icons">face</i>-->
                    </span>
                  </div>
                  <select name="sid" class="form-control" id="default" required>
                        
                           <option>Status</option>
                              <?php
                                    if($result1)
                                    {
                                      while($row=mysqli_fetch_array($result1))
                                        {?>
                                          <option value="<?php echo $row["sid"]; ?>"><?php echo $row["sname"]; ?></option>
                                     <?php  }         } 
                            ?>
                         

                  </select>
               

                 <!-- <input type="text" class="form-control" name="">-->
                </div>
   
<center>
<button class="btn btn-primary" name="submit">SUBMIT<div class="ripple-container"></div></button></center>
</form>
</div>
</div>
</div>
</div>
</div>

  

                         
                <?php
require "./template/dashfooter.php";
?>