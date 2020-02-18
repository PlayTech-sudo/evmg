<?php
require "./template/indexheader.php";
?>
<?php
include("./function/dbconn.php");
   session_start();// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
$title = mysqli_real_escape_string($conn, $_REQUEST['title']);
$nop = mysqli_real_escape_string($conn, $_REQUEST['no_of_participants']);
$descrip = mysqli_real_escape_string($conn, $_REQUEST['description']);
$sd = mysqli_real_escape_string($conn, $_REQUEST['start_date']);

$status = mysqli_real_escape_string($conn, $_REQUEST['estatus']);
// Attempt insert query execution
$sql = "INSERT INTO event (ename,description,no_of_participants,estatus,start_date) 
VALUES ('$title','$descrip','$nop','$status','$sd')";
if(mysqli_query($conn, $sql)=="TRUE"){
    echo "<script>alert('Event Created successfuly');
      window.location.href= 'dash.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
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
  <div class="page-header header-filter" style="background-image: url('./assets/img/bg.jpg'); background-size: cover; background-position: top center;">    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-sm-10 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Create Event</h4>
              </div><br>
              <p class="description text-center"></p>
            

              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                     Event Title <!--<i class="material-icons">face</i>-->
                    </span>
                  </div>
                  <input type="text" class="form-control" name="title">
                </div><br>

                
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      Number of participants<!--<i class="material-icons">lock_outline</i>-->                    
                    </span>
                  </div>
                  <input type="Number" class="form-control" name="no_of_participants">
                </div><br>


                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                     Description <!--<i class="material-icons">lock_outline</i>-->                    
                    </span>
                  </div>
                  <textarea rows="4" cols="50" name="description"></textarea> 
                </div><br>
                

             <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Status
                      <i class="material-icons"></i>
                    </span>
                  </div>
                 <select name="estatus" class="form-control" id="default" required>
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
                    <span class="input-group-text">Start Date
                      <!--<i class="material-icons">lock_outline</i>-->                    
                    </span>
                  </div>
                  <input type="date" class="form-control" name="start_date">
                </div><br>

                
              </div>
             <div class="footer text-center">
               
                <div id="buttons" class="cd-section">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">

            </div>

            </div>
        </div>
        </div>
        
              <center>
                <button type="button" class="btn btn-link"><a href="./dash.php">Back</a></button>
             <button class="btn btn-primary">SUBMIT<div class="ripple-container"></div></button>
              <button class="btn btn-primary">CANCEL<div class="ripple-container"></div></button>
            </center>
          
            </form>
          </div>  
        </div>
      </div>
    </div>
    <?php
   require "./template/footer.php";
   ?>