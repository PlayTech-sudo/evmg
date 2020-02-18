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
$eid= mysqli_real_escape_string($conn, $_REQUEST['eid']);
$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
$amount = mysqli_real_escape_string($conn, $_REQUEST['amount']);
$sd = mysqli_real_escape_string($conn, $_REQUEST['sdate']);

// Attempt insert query execution
//$sql = "INSERT INTO payment (eid,pid,amount,date) 
//VALUES ('$eid','$pid','$amount','$sd')";


//if(mysqli_query($conn, $sql)=="TRUE"){
 //   echo "udated successfuly";
//} else{
 //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

$sql1="select * from take_entries where pid='$pid'";
$r1=mysqli_query($conn, $sql1);
$row1=mysqli_fetch_array($r1);
                            
$pamt=$row1['payment'];
    $tamt=$pamt+$amount;

     
                            

$sql2 = "UPDATE take_entries  SET sdate='$sd', payment='$tamt' WHERE eid='$eid' and pid='$pid'";

if ($conn->query($sql2) === TRUE) {
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
          <div class="card">
            <form class="form" method="POST" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Take Payment</h4>
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
                        <option>Event name</option>
                           
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
                    <span class="input-group-text">Partiicipate name
                      <i class="material-icons"></i>
                    </span>
                  </div>
                 <select name="pid" class="form-control" id="default" required>
                        <option>participate</option>
                           
                              <?php
                              $query="select * from take_entries as t,event as e where t.eid=e.eid";
                                  $result=mysqli_query($conn,$query);
                               
                                    if($result)
                                    {
                                      while($row=mysqli_fetch_array($result))
                                        {?>
                                          <option value="<?php echo $row["pid"]; ?>"><?php echo $row["pname"]; ?></option>
                                     <?php  }         } 
                            ?>
                         

                  </select>
                </div>
                <br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Enter The Amount  
                      <i class="material-icons"></i>
                    </span>

                  </div><input type="number" name="amount" class="form-control"> 
<?php

                 ?>

                </div>
<br>
<div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Date
                      <!--<i class="material-icons">lock_outline</i>-->                    
                    </span>
                  </div>
                  <input type="date" class="form-control" name="sdate">
                </div><br>



               
<br>

<center>
   <button type="button" class="btn btn-link"><a href="./dash.php">Back</a></button>
   <button class="btn btn-primary">SUBMIT<div class="ripple-container"></div></button>
              <button class="btn btn-primary">CANCEL<div class="ripple-container"></div></button></center>
       


              <div class="footer text-center">
                
                <div id="buttons" class="cd-section">
                  <div class="row">
                    <div class="col-lg-12 ml-auto mr-auto">
     
            </div>
            </div>
             
           </div>
              </div>
            </form>
          </div>  
        </div>
      </div>
    </div>
   <?php
   require "./template/footer.php";
   ?>