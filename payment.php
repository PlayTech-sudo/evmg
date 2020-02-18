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

$q2="select *from event as e,take_entries as t where e.eid=t.eid";
$r2=mysqli_query($conn,$q2);


?>

<form action="" method="POST" class="form">
  <div class="container">
      <div class="row">
        <div class="col-sm-2 col-sm-10 ml-auto mr-auto">
          <div class="card">
            
              <div class="card-header card-header-info text-center">
                <h4 class="card-title">REPORTS</h4>
              </div>
    <center>          
  <section class="section" id="examp1">
        <div class="container-fluid">   
  <div class="col-sm-10">
     <div class="card">
      <div class="card-body">
 
<table class="table">
   <thead class="thead-light">
   <tr>
    <th>Event</th>
    <th >Name</th>
    <th>Mobile No</th>
    <th>Payment</th>
    <th>Date of payment</th>
   </tr>
   </thead>

    <tbody> 
      <?php
        while($rows=mysqli_fetch_assoc($r2))
         {
      ?>
       <tr>
        <td><?php echo $rows['ename']; ?></td>
        <td><?php echo $rows['pname']; ?></td>
        <td><?php echo $rows['pmbl']; ?></td>
        <td><?php echo $rows['payment']; ?></td>
        <td><?php echo $rows['sdate']; ?></td>
       </tr>


<?php
  }
?>

    <tr>
    <th colspan="5"  style="text-align: center"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" OnClick="CallPrint(examp1)" ></i></th>
    </tr>
  
</tbody>
</table></div></div></div></div></section>
</center>





</div></div></div></div>
</form>




<?php
require "./template/dashfooter.php";
?>;