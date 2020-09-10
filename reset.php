<?php
include("connect.php");
session_start();
$userprofile=$_SESSION['user_name'];
if(isset($_POST['reset']))
{
$sql = "DELETE FROM updating WHERE mail='$userprofile'";

if ($success->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('location:progress.php');
} else {
  echo "Error deleting record: " . $conn->error;
}
}

?>