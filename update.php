<?php
require "./template/indexheader.php";
include("./function/dbconn.php");

?>
<?php
 include("./function/dbconn.php");
   session_start();// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_select_db($conn,$db);

if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
    
$eid = mysqli_real_escape_string($conn, $_REQUEST['eid']);
$status = mysqli_real_escape_string($conn, $_REQUEST['status']);
$ed = mysqli_real_escape_string($conn, $_REQUEST['end_date']);




$sql = "UPDATE event as e,manage_entries as m SET e.estatus='$status', m.sid='$status',e.end_date='$ed' WHERE e.eid='$eid' and m.eid='$eid'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record updated successfully');
      window.location.href= 'dash.php';</script>";
} else {
    echo "Error updating record: " . $conn->error;
}


}
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
          <div class="card ">
            <form class="form" method="POST" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">update event status</h4>
              </div><br>
              <p class="description text-center"></p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Event name
                      <i class="material-icons"></i>
                    </span>
                  </div>
                  <select name="eid" class="form-control" id="default" required>
                        <option>:</option>
                           
                              <?php
                              $query3="select * from event where estatus!='3'";
                                  $result3=mysqli_query($conn,$query3);
                                    if($result3)
                                    {
                                      while($row=mysqli_fetch_array($result3))
                                        {?>
                                          <option value="<?php echo $row["eid"]; ?>"><?php echo $row["ename"]; ?></option>
                                     <?php  }         } 
                            ?>
                         

                  </select>
                </div>
 <br>





<div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Status
                      <i class="material-icons"></i>
                    </span>
                  </div>
                 <select name="status" class="form-control" id="default" required>
                        <option>:</option>
                           
                              <?php
                              $query1="select * from status";
 								 $result1=mysqli_query($conn,$query1);
                                    if($result1)
                                    {
                                      while($row=mysqli_fetch_array($result1))
                                        {?>
                                          <option value="<?php echo $row["sid"]; ?>"><?php echo $row["sname"]; ?></option>
                                     <?php  }         } 
                            ?>
                         

                  </select>
                </div>

                <br>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">End Date
                      <!--<i class="material-icons">lock_outline</i>-->                    
                    </span>
                  </div>
                  <input type="date" class="form-control" name="end_date">
                </div><br>
                



<center>
   <button type="button" class="btn btn-link"><a href="./dash.php">Back</a></button>
   <button class="btn btn-primary">SUBMIT<div class="ripple-container"></div></button>
              <button class="btn btn-primary">CANCEL<div class="ripple-container"></div></button></center>

 </form>
          </div>  
        </div>
      </div>
    </div>


       
 <?php
   require "./template/footer.php";
   ?>