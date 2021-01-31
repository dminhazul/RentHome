<?php
	include_once('../db.php');

	$Phonenumber = false;
	$Area = $_POST['Area'];
	$MasterBed   = $_POST['MasterBed'];
	$SingleBed = $_POST['SingleBed'];
	$Balcony = $_POST['Balcony'];
	$Washroom = $_POST['Washroom'];
	$un= $_POST['username'];
	$price = $_POST['price'];
	$title = $_POST['title'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$details = $_POST['details'];
	$file = $_FILES['file'];
	if (isset($_POST['submit'])) {
		if (empty($price) || empty($title) || empty($address) || empty($contact) || empty($details) || empty($details)) {
				header('location:../postad.php?status=empty!');
				exit();
		}else{
				if (!is_numeric($price)) {
					header('location:../adminhome.php?status=PriceGivenumber!');
					exit();
				}

				if(is_numeric($address[0]) && strlen($address >= 2)){
					header('location:../adminhome.php?status=addresserror');
					exit();
				}

				//phone Number
				if (is_numeric($contact)) {
					if ((strlen($contact) == 11) && ($contact[0] == 0) && ($contact[1] == 1)) {
						if (($contact[2] == 7) || ($contact[2] == 9) || ($contact[2] == 6) || ($contact[2] == 8) || ($contact[2] ==  3)|| ($contact[2] == 5)) {
								$Phonenumber = true;
								$Phonenumber = $contact;
						}else{
							header('location:adminhome.php?signup=index2doesnotmatch');
						}
					}
					else{
						header('location:adminhome.php?signup=check11number');
					}
				}else{
					header('location:adminhome.php?signup=checkitsnumber');
				}
				$fileName = $_FILES['file']['name'];
				//var_dump($file);return;
				$fileNameTmp = $_FILES['file']['tmp_name'];
				$fileNameSize = $_FILES['file']['size'];
				$fileNameType = $_FILES['file']['type'];
				$fileNameError = $_FILES['file']['error'];
				$fileExt = explode('.', $fileName);
				$fileActualExt = strtolower(end($fileExt));
				$Allowed = array('jpg', 'jpeg', 'png');

			if (in_array($fileActualExt, $Allowed)) {
				if ($fileNameError === 0) {
					if ($fileNameSize < 1000000) {
						
						$fileNewName  = uniqid('', true).".".$fileActualExt;
						$fileDestination = '../Upload/'.$fileNewName;
						$fileuplode = 'Upload/'.$fileNewName;
						move_uploaded_file($fileNameTmp, $fileDestination);

					$sql = "INSERT INTO `ads` (`username`,`area`, `masterbed`, `singlebed`, `balcony`, `washroom`, `rent`, `ad_title`, `full_address`, `number`, `house_details`, `Image`) VALUES ('".$un."','".$Area."', '".$MasterBed."', '".$SingleBed."', '".$Balcony."', '".$Washroom."', '".$price."', '".$title."','".$address."', '".$contact."', '".$details."', '".$fileuplode."')";
						$result = mysqli_query($con, $sql);
						if ($result) {
							header('location:../showad.php?upload=success!');
						}else{
							echo "insert not successful";
						}
						
					}else{
						echo "Your file is too big!!";
					}
				}else{
					echo "There was an error uploading your file!";
				}
			}else{
				echo "You can not upload file this formate!!";
			}

		}
	}
?>