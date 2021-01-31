<?php
	include  'mylocation.php';
	//session_start();
	
	

	//$id=$_POST['id'];
	
	//$latt=$_POST['myLat'];
	//$longgg=$_POST['myLong'];

	//var lat = success(position);

	if (isset($_POST['submit'])) 
		{	
			//$_POST['id']=$id;
			//$id=$_POST['id'];

			$con=mysqli_connect("localhost","root","","project");
			$sql = "UPDATE `ads` SET lat = '$myLat' and longg = '$myLong' WHERE `ads`.`id` = '23'";
						$result = mysqli_query($con, $sql);
						if ($result) {
							header('location:../showad.php?upload=success!');
						}else{
							header('location:../home.php?upload=failed!');
						}
		
		}
	else{
		header('location:../profile.php?upload=failed!');

	}	
?>