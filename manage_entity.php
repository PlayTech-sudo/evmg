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
            <form class="form" method="POST" action="m.php">
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
                  <select name="ename" class="form-control" id="default" required>
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