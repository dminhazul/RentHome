<?php
$con=mysqli_connect("localhost","root","","project");
				
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}

$ID = $_POST['id'];
if (isset($_POST['submit'])) {
$sql = "delete from user where Id =$ID ";
$result = mysqli_query($con, $sql);
	if($result)
	{
		header('location:../adminhome.php?delete=successful!');
	}
	else
	{
		echo "Try Again!!!!";
	}
}
?>