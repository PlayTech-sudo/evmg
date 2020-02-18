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


<?php




?>