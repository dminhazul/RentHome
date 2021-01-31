<?php
	include_once('db.php');

	$Phonenumber = false;
	$Name = $_POST['name'];
	$Uname = $_POST['uname'];
	$Email = $_POST['email'];
	$gender = $_POST['gender'];
	$phonevalue = $_POST['phone'];
	$usertype = $_POST['usertype'];
	$Password = $_POST['password'];
	$conpassword = $_POST['password1'];

	if (isset($_POST['submit'])) {
		if (empty($Name) || empty($Uname) || empty($Email) || empty($phonevalue) || empty($Password) || empty($conpassword)) {
			header('location:register.php?signup=empty');
			exit();
		}
		if(is_numeric($Name[0]) && strlen($Name >= 2)){
		header('location:register.php?signup=nameerror');
		exit();
		}
		if(is_numeric($Uname[0]) && strlen($Uname >= 2)){
		header('location:register.php?signup=Usernameerror');
		exit();
		}
		// check first part 
	 $exploded = explode('@', $Email);		 
	if(strlen($exploded[0]) < 4 || is_numeric($exploded[0][0])){
		//var_dump($Email);
		header('location:register.php?signup=mailfirsterror');
		exit();
	}

	// check middle part
	$exploded_vendor = explode('.', $exploded[1]);
	if(strlen($exploded_vendor[0]) > 8 || is_numeric($exploded_vendor[0])){
		header('location:register.php?signup=mailsecounderror');
		exit();
	}

	//check last part
	if(strlen($exploded_vendor[1])  != 3){
		header('location:register.php?signup=Comerror');
		exit();
	}
	//phone Number
	if (is_numeric($phonevalue)) {
		if ((strlen($phonevalue) == 11) && ($phonevalue[0] == 0) && ($phonevalue[1] == 1)) {
			if (($phonevalue[2] == 7) || ($phonevalue[2] == 9) || ($phonevalue[2] == 6) || ($phonevalue[2] == 8) || ($phonevalue[2] ==  3)|| ($phonevalue[2] == 5)) {
					$Phonenumber = true;
					$Phonenumber = $phonevalue;
			}else{
				header('location:register.php?signup=index2doesnotmatch');
			}
		}
		else{
			header('location:register.php?signup=check11number');
		}
	}else{
		header('location:register.php?signup=checkitsnumber');
	}

	if ($Password != $conpassword) {
		header('location:register.php?signup=passworderror');
		exit();
	}


	$sql = "INSERT INTO `userdetails` (`Name`, `Username`, `Email`, `Gender`, `Phone`, `Usertype`, `Password`, `ConPassword`) VALUES ('".$Name."', '".$Uname."', '".$Email."', '".$gender."', '".$Phonenumber."', '".$usertype."', '".$Password."', '".$conpassword."');";
	  $result = mysqli_query($con, $sql);
	   /*var_dump($result);
		return;*/
    if ($result) {
    	header('location:Login.php?message=success');
    }else{
    	echo "Data can't insert successfully!";
    	header('location:register.php?signup=error2');
    }
  } 

?>