<?php
	session_start();
	include_once('db.php');
	
	$name = $_POST['uname'];
	$password = $_POST['password'];

	if (isset($_POST['submit'])) {
		if (empty($name) || empty($password)) {
			header('location:Login.php?login=empty');
			exit();
		}else{
			$sql = "SELECT * FROM userdetails where Username = '".$name."' and Password = '".$password."'";
			$result = mysqli_query($con, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1 ) {
				header('localhost:Login.php?Login=error');
				exit();
			}else{
				 if($rows = mysqli_fetch_assoc($result)) {
				 	$_SESSION['id'] = $rows['ID'];
				 	$_SESSION['name'] = $rows['Name'];
				 	$_SESSION['username'] = $rows['Username'];
				 	$_SESSION['usertype'] = $rows['Usertype'];

				 	if ($_SESSION['usertype'] == "Admin") {
				 		header('location:adminhome.php');
				 	}
				 	else if($_SESSION['usertype'] == "Owner")
			 		{
			 			header('location:userhome.php');
			 		}
			 		else if($_SESSION['usertype'] == "User")
			 		{
			 			header('location:userhome.php');
			 		}
			 		else
			 		{
				 		header('location:Login.php?login=inveliduser');
				 	}
					
				}
			}
		}
	}
?>