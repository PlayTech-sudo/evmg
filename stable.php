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

$sid=$_POST['sid'];

$q3="select sname from Status where sid='$sid'";
$r3=mysqli_query($conn,$q3);
$q2="select sname,m.pname,sdate from status as s ,manage_entries as m ,take_entries as t where s.sid='$sid' and m.sid='$sid' and t.pname=m.pname";
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
  <caption><B>STATUS:<?php $rows=mysqli_fetch_assoc($r3); echo $rows['sname'];?></B></caption>
<table class="table">
   <thead class="thead-light">
   <tr>
    <th >Name</th>
    <th>Date</th>
   </tr>
   </thead>

    <tbody> 
      <?php
        while($rows=mysqli_fetch_assoc($r2))
         {
      ?>
       <tr>
        <td><?php echo $rows['pname']; ?></td>
        <td><?php echo $rows['sdate']; ?></td>
       </tr>


<?php
  }
?>

    <tr>
    <th colspan="3"  style="text-align: center"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" OnClick="CallPrint(examp1)" ></i></th>
    </tr>
  
</tbody>
</table></div></div></div></div></section>
</center>







</div></div></div></div>
</form>




<?php
require "./template/dashfooter.php";
?>