<?php
require "./template/indexheader.php";
include("./function/dbconn.php");

?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") 
   {

$eid=$_POST['eid'];

$pname=$_POST['pname'];
$at=$_POST['assg_task'];
$sid=$_POST['status'];
$pid=$_POST['priority'];


//$s="INSERT INTO `manage_entries`(`eid`, `pname`, `ass_task`, `sid`, `prid`) VALUES (['".$eid."'],['".$pname."'],['".$at."'],['".$sid."'],['".$pid."'])";

$s = "INSERT INTO manage_entries(eid,pname,ass_task,sid,prid) 
VALUES ('$eid','$pname','$at','$sid','$pid')";

if(mysqli_query($conn, $s)=="TRUE"){
     echo "<script> alert('Entries added successfully');

      window.location.href= 'dash.php';</script>";
} else{
    echo "ERROR: Could not able to execute $s. " . mysqli_error($conn);
}
}

?>