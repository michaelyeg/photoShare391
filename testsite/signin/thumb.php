
	<?php 
	include('PHPconnectionDB.php');

session_start(); // Starting Session
$user_name=$_SESSION["login_user"];
$n = $_GET['n'];


if ($n == '1') {
$sql = "SELECT photo_id FROM images";
}
if ($n == '2') {
$sql = "SELECT photo_id FROM images";
}
else {
$sql = "SELECT photo_id FROM images";
}
$conn = connect();
$stid = oci_parse($conn, $sql);
oci_execute($stid);
$showrow = oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS);
while($showrow) {
  		$id = $showrow['PHOTO_ID'];
  		echo "<img src='getimage.php?id=$id' />";
}


?>