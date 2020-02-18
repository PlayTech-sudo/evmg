<?php
require "./template/indexheader.php";
include("./function/dbconn.php");
?>
<?php
  mysqli_select_db($conn,$db);
  $query="select * from event where estatus!='3'";
  $result=mysqli_query($conn,$query);

  $query1="select * from category";
  $result1=mysqli_query($conn,$query1);
  if($_SERVER["REQUEST_METHOD"] == "POST") 
   {

$ename = mysqli_real_escape_string($conn, $_REQUEST['ename']);
$cname = mysqli_real_escape_string($conn, $_REQUEST['cname']);
$pname = mysqli_real_escape_string($conn, $_REQUEST['pname']);
$paddres = mysqli_real_escape_string($conn, $_REQUEST['paddress']);
$pmbl = mysqli_real_escape_string($conn, $_REQUEST['pmbl']);
$pay = mysqli_real_escape_string($conn, $_REQUEST['pay']);
$sdate = mysqli_real_escape_string($conn, $_REQUEST['sdate']);




                           




$sql = "INSERT INTO take_entries(eid,cid,pname,paddr,pmbl,payment,sdate) 
VALUES ('$ename','$cname','$pname','$paddres','$pmbl','$pay','$sdate')";

if(mysqli_query($conn, $sql)=="TRUE"){
     echo "<script>alert('Entries added successfully');
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
  <div class="page-header header-filter" style="background-image: url('./assets/img/bg.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-sm-10 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Take Entities</h4>
              </div>
              <p class="description text-center"></p>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      Event Name:<!--<i class="material-icons">face</i>-->
                    </span>
                  </div>
                  <select name="ename" class="form-control" id="default" required>
                        <option>Event name</option>
                           
                              <?php
                                    if($result)
                                    {
                                      while($row=mysqli_fetch_array($result))
                                        {?>
                                          <option value="<?php echo $row["eid"]; ?>"><?php echo $row["ename"]; ?></option>
                                     <?php  }         } 
                            ?>
                         

                  </select>
                 <!-- <input type="text" class="form-control" name="">-->
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                     Category: <!--<i class="material-icons">lock_outline</i>-->                    
                    </span>
                  </div>
                  <select name="cname" class="form-control" id="default" required="required">
                        <option>Category name</option>
                            
                              <?php
                                    if($result1)
                                    {
                                      while($row=mysqli_fetch_array($result1))
                                        {?>
                                          
                                         <option value="<?php echo $row["cid"]; ?>"><?php echo $row["cname"]; ?></option>
                                    <?php    }
                                                } 
                            ?>
                         

                  </select>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                    Participate name:  <!--<i class="material-icons">lock_outline</i>-->
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="" name="pname">
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                     Participate address: <!--<i class="material-icons">lock_outline</i>-->                    
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="" name="paddress">
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      Mobile number:<!--<i class="material-icons">lock_outline</i>-->                    
                    </span>
                  </div>
                  <input type="number" class="form-control" placeholder="" name="pmbl">
                </div>
            <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Date
                      <!--<i class="material-icons">lock_outline</i>-->                    
                    </span>
                  </div>
                  <input type="date" class="form-control" name="sdate">
                </div><br>




                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      Payment:<!--<i class="material-icons">lock_outline</i>-->                    
                    </span>
                  </div>
                  <input type="number" class="form-control" placeholder="" name="pay">
                </div>

                
                 <center>
                   <button type="button" class="btn btn-link"><a href="./dash.php">Back</a></button>
                 <button class="btn btn-primary" type="submit">SUBMIT<div class="ripple-container"></div></button>
              <button type="reset" name="cancel" class="btn btn-primary ">CANCEL<span class="btn-label btn-label-right"></span></button></center>
             
            </form>
          </div>  
        </div>
      </div>
    </div>
  </div>

  <?php
   require "./template/footer.php";
   ?>