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

$query1="select * from category";
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
            <form class="form" method="POST" action="ctable.php">

              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Entries report</h4>
              </div>
              <p class="description text-center"></p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> Select Category:
                <!--<i class="material-icons">face</i>-->
                    </span>
                  </div>
                  <select name="catid" class="form-control" id="default" required>
                        
                           <option>Choose Category</option>
                              <?php
                                    if($result1)
                                    {
                                      while($row=mysqli_fetch_array($result1))
                                        {?>
                                          <option value="<?php echo $row["cid"]; ?>"><?php echo $row["cname"]; ?></option>
                                     <?php  }         } 
                            ?>
                         

                  </select>
               

                 <!-- <input type="text" class="form-control" name="">-->
                </div>
   <br><br><br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                     Select Date: <!--<i class="material-icons">lock_outline</i>-->                    
                    </span>
                  </div>
                  <input type="date" name="sdate" id="sdate">
                  
                </div>
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