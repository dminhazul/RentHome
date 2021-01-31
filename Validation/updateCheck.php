<?php
	include_once('../db.php');

$ID = $_POST['id'];

$area = $_POST['area'];
$masterbed = $_POST['masterbed'];
$singlebed = $_POST['singlebed'];
$balcony = $_POST['balcony'];
$washroom = $_POST['washroom'];
$rent = $_POST['rent'];
$ad_titil = $_POST['ad_titil'];
$fulladdress = $_POST['fulladdress'];
$pnnumber = $_POST['pnnumber'];
$houseditels = $_POST['houseditels'];

	if(!isset($_POST['submit'])){
			header('location:../Userregistration.php?update=empty!');
			exit();
		}

	if (empty($area) || empty($masterbed) || empty($singlebed) || 
		empty($balcony) || empty($washroom) || empty($rent) || empty($ad_titil) || empty($fulladdress) || empty($pnnumber) || empty($houseditels) ) {
			header('location:update.php?update=empty!');
			exit();
		}
	


	$sql = "update ads set area='$area', masterbed='$masterbed', singlebed='$singlebed', balcony='$balcony', washroom='$washroom', rent='$rent', ad_title='$ad_titil', full_address='$fulladdress', number='$pnnumber', house_details='$houseditels' where Id = '$ID'; ";
	$result = mysqli_query($con, $sql);

	if ($result) {
		header('location:../showad.php');
	}
	else{
		header('location:../update.php');
		echo "data not update!!";
	}
?>