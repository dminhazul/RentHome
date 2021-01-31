<?php
  include_once('../db.php');

$ID = $_POST['id'];
if (isset($_POST['submit'])) {
$sql = "delete from ads where Id =$ID ";
$result = mysqli_query($con, $sql);
	if($result)
	{
		header('location:../myad.php?delete=successful!');
	}
	else
	{
		echo "Try Again!!!!";
	}
}
?>
