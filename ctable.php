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

$catid=$_POST['catid'];
$d=$_POST['sdate'];

$q2="select cname from category where cid='$catid'";
$r2=mysqli_query($conn,$q2);

$q="select * from take_entries as t,category as c where c.cid=t.cid and t.cid='$catid'";
$r=mysqli_query($conn,$q);

$q1="select * from take_entries as t,event as e where t.eid=e.eid and e.start_date='$d'";
$r1=mysqli_query($conn,$q1);
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
  <caption><B>CATEGORY:<?php $rows=mysqli_fetch_assoc($r2); echo $rows['cname'];?></B></caption>
<table class="table">
   <thead class="thead-light">
   <tr>
    <th >Name</th>
    <th >Address</th>
    <th>Mobile No</th>
    <th>Payment</th>
   </tr>
   </thead>

    <tbody> 
      <?php
        while($rows=mysqli_fetch_assoc($r))
         {
      ?>
       <tr>
        <td><?php echo $rows['pname']; ?></td>
        <td><?php echo $rows['paddr']; ?></td>
        <td><?php echo $rows['pmbl']; ?></td>
        <td><?php echo $rows['payment']; ?></td>
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


<center>
  <section class="section" id="examp2">
        <div class="container-fluid">
  
<div class="col-sm-10">
    <div class="card">
      <div class="card-body">
        <caption><B>DATE:<?php echo $d;?></B></caption>
<table class="table" >
   <thead class="thead-light">

<tr>
  <th>Name</th>
  <th>Address</th>
  <th>Mobile No</th>
  <th>Payment</th>
 
</tr>
</thead>
<?php
while($rows=mysqli_fetch_assoc($r1))
{
  ?><tbody>
  <tr>
    <td><?php echo $rows['pname']; ?></td>
    <td><?php echo $rows['paddr']; ?></td>
    <td><?php echo $rows['pmbl']; ?></td>
    <td><?php echo $rows['payment']; ?></td>

</tr>

<?php
}
?>
<tr>
  <th colspan="4"  style="text-align: center"><i class="fa fa-print fa-2x" aria-hidden="true" style="cursor:pointer" OnClick="CallPrint(examp2)" ></i></th>
</tr>
</tbody>
</table>

</div></div></div>
</div></section>
</center>





</div></div></div></div>
</form>




<?php
require "./template/dashfooter.php";
?>