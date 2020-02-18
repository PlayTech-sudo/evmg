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

$query1="select * from status";
  $result1=mysqli_query($conn,$query1);
$query2="select * from priority";
  $result2=mysqli_query($conn,$query2);

$ename=$_POST['ename'];
 $query="select * from take_entries as t,event as e where t.eid=e.eid and e.eid='$ename'";
$result=mysqli_query($conn,$query);
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
          <div class="card card-login">
            <form class="form" method="POST" action="insert.php">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Manage Entries</h4>
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
                        
                           
                              <?php
                              $query3="select ename,eid from event where eid='$ename'";
                                  $result3=mysqli_query($conn,$query3);
                                    if($result3)
                                    {
                                      while($row=mysqli_fetch_array($result3))
                                        {?>
                                          <option value="<?php echo $row["eid"]; ?>"><?php echo $row["ename"]; ?></option>
                                     <?php  }         } 
                            ?>
                         

                  </select>
<div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Partiicipate name
                      <i class="material-icons"></i>
                    </span>
                  </div>
                 <select name="pname" class="form-control" id="default" required>
                        <option>participate</option>
                           
                              <?php
                               
                                    if($result)
                                    {
                                      while($row=mysqli_fetch_array($result))
                                        {?>
                                          <option value="<?php echo $row["pname"]; ?>"><?php echo $row["pname"]; ?></option>
                                     <?php  }         } 
                            ?>
                         

                  </select>
                </div>
                

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Assign task
                      <i class="material-icons"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="" name="assg_task">
                </div>
                

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Status
                      <i class="material-icons"></i>
                    </span>
                  </div>
                 <select name="status" class="form-control" id="default" required>
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
                </div>
                

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Priority
                      <i class="material-icons"></i>
                    </span>
                  </div>
                  <select name="priority" class="form-control" id="default" required>
                        <option>Priority</option>
                           
                              <?php
                                    if($result2)
                                    {
                                      while($row=mysqli_fetch_array($result2))
                                        {?>
                                          <option value="<?php echo $row["prid"]; ?>"><?php echo $row["prname"]; ?></option>
                                     <?php  }         } 
                            ?>
                         

                  </select>
                </div>
               </div>

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