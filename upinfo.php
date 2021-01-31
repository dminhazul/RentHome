<?php
   session_start();
   if(isset($_SESSION['username']))
{

}
else
{
	header("Location:login.php");
} 

$uname=$_SESSION['username'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$email=$_SESSION['email'];
$phone= $_SESSION['phone'];
$gender= $_SESSION['gender'];
$dd= $_SESSION['day'];
$mm= $_SESSION['month'];
$yyyy = $_SESSION['year'];

	if (isset($_POST['tsearch']))
	{
		$ts = $_POST['tbsearch'];
		if ($ts == "" )
		{
			echo "enter something";
		}
		else
		{
			header("Location:Dfilter.php");
		}
	}
$regerr="";
	if(isset($_POST['update']))
	{
		$username=$_POST['username'];
		

		$con=mysqli_connect("localhost","root","","project");
		if(!$con)
		{
			die("Connection Error: ".mysqli_connect_error()."<br/>");
		}
		$sql="SELECT * FROM user WHERE username = '$username'";
		$result=mysqli_query($con,$sql);	
		if(mysqli_num_rows($result)>0)
		{
		 
			$regerr="User name is already taken";
			
		}
		else 
		{
				if($username == "")
				{
					$regerr="Please give a user name ";
				}
				else
				{
					
					$con=mysqli_connect("localhost","root","","project");
				
					if(!$con)
					{
						die("Connection Error: ".mysqli_connect_error()."<br/>");
					}
					//Row Insert
	
					$sql="UPDATE user SET username='$username' WHERE firstname='$fname' and email='$email'";				
					if(mysqli_query($con,$sql))
					{	
					
					
							$regerr="username updated successfully";
							$_SESSION['username']=$username;
							$uname=$_SESSION['username'];
					}
					else
					{						
						echo "Error in inserting: ".mysqli_error($con);
					}
				}
				
		}

	}

	if(isset($_POST['update1']))
	{
		$udemail=$_POST['email'];

			if($udemail == "" )
			{
				$regerr="Please give an email address";
			}
			else if(!filter_var($udemail, FILTER_VALIDATE_EMAIL))
			{
				$regerr="Email is not correct";
			}

			else
			{
					$con=mysqli_connect("localhost","root","","project");
				
					if(!$con)
					{
						die("Connection Error: ".mysqli_connect_error()."<br/>");
					}
					//Row Insert
	
					$sql="UPDATE user SET email='$udemail' WHERE username='$uname'";				
					if(mysqli_query($con,$sql))
					{	
					
					
							$regerr="Email updated successfully";
							$_SESSION['email']=$udemail;
							$email=$_SESSION['email'];
					}
					else
					{						
						echo "Error in inserting: ".mysqli_error($con);
					}
			}
	}

	if(isset($_POST['update2']))
	{
		$udphone=$_POST['phonenumber'];

			if($udphone == "" )
			{
				$regerr="Please give a phone number";
			}
			else if(!preg_match("/^[0-9]*$/",$udphone))
			{
				$regerr="Invalid Phone number";
			}
			else if(strlen($udphone)!=11)
			{
				$regerr="Phone number must be 11 digit";
			}
			else
			{
					$con=mysqli_connect("localhost","root","","project");
				
					if(!$con)
					{
						die("Connection Error: ".mysqli_connect_error()."<br/>");
					}
					//Row Insert
	
					$sql="UPDATE user SET phone='$udphone' WHERE username='$uname'";				
					if(mysqli_query($con,$sql))
					{	
					
					
							$regerr="Phone number updated successfully";
							$_SESSION['phone']=$udphone ;
							$phone=$_SESSION['phone'];
					}
					else
					{						
						echo "Error in inserting: ".mysqli_error($con);
					}
			}
		

	}
	if(isset($_POST['submit']))
	{
		move_uploaded_file($_FILES['file']['tmp_name'], "image/".$_FILES['file']['name']);
		$con=mysqli_connect("localhost","root","","project");
				
					if(!$con)
					{
						die("Connection Error: ".mysqli_connect_error()."<br/>");
					}
		$sql=mysqli_query($con,"UPDATE user SET mail = '".$_FILES['file']['name']."' WHERE username ='$uname'");
	}


?>

<html>

    <head>
	
	    <title>Profile</title>
		
    </head>
	
	<body>
	
	    
	
	        <table width="100%" height="80px" bgcolor="#43c1d0" >
				<form method="post" >
					<tr>
				
						<td width="25%" align="middle"><font face = "Comic sans MS"><h1>PALACE.COM</h1></font></td>
						
						<td width="50%" align="left"><input type="text" size = "70" name="tbsearch" placeholder="Search Your Loaction!"/>
						
						<input type="Submit" value="Search" name="tsearch"/></td>
						
						<td width="25%" align="left"> <a href = "https://google.com/maps">Search using map</a></td> 
				
					</tr>
				</form>	
		    </table>
				
		
		
		<table width="100%" height="480px">
		
				
		
		    <tr>
				
		
			    <td width="85%" valign="top" bgcolor="lightgray" >
					
					
					<table>				
						<tr>
							<td><?php

							$name=$_SESSION['username'];
									$con=mysqli_connect("localhost","root","","project");
				
										if(!$con)
										{
											die("Connection Error: ".mysqli_connect_error()."<br/>");
										}
									$sql= mysqli_query($con,"SELECT * FROM user WHERE username='$name'");
									while ($row = mysqli_fetch_assoc($sql) ) 
									{	if($row['mail'] == "" )
										{
											echo "<img src='image/profile.jpg' width='280px' height='300px' alt='SorryNoImage'>" ;
										}
										else
										{
											echo "<img src='image/".$row['mail']."' width='280px' height='300px' alt='Image'>" ;
										}
									}
							?><br/><br/></td>
								<td width="80%" align="left" valign = "top">
									<table>
										
										<tr><td><b><font size="5">Username: <?= $uname ?></b></td></tr></font>
										<tr><td><b><font size="5">Name: <?php echo "$fname $lname " ?></b></td></tr></font>
										<tr><td><b><font size="5">Email: <?= $email ?></b></td></tr></font>
										<tr><td><b><font size="5">Mobile Number: <?= $phone ?></b></td></tr></font>
										<tr><td><b><font size="5">Gender: <?= $gender ?></b></td></tr></font>
										<tr><td><b><font size="5">Birthdate: <?php echo " $dd/$mm/$yyyy "?></b></td></tr></font>

										<tr></tr>
										<tr></tr>
										<tr></tr>
										<tr>
											<td> <a href = "https://google.com/maps">Update Location in map </a> </td>
										<form method="post" enctype="multipart/form-data" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">	
										</tr>
										
										<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr>
											
											<td><input type="file" name="file"></td>
										
										</tr>
										<tr>
											<td><input type="Submit" name="submit" value="Upload"></td>
										</tr>
										</form>
									</table>
									

								</td>
								<td width = "20%" valign = "top" align = "left">
									<table>
										<tr><h2>Update info</h2></tr>
										<tr>
										<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">	
											<td><input type="text" name="username" placeholder="Username"/><br/><input type="Submit" value="Update" name="update"></td> 

										</form>
										</tr>
										<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
										<tr>
										<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">	
											<td><input type="text" name="email" placeholder="Email"/><br/><input type="Submit" value="Update" name="update1"></td> 
										</form>
										</tr>
										<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
										<tr>
										<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">	
											<td><input type="text" name="phonenumber" placeholder="Mobile Number"/><br/><input type="Submit" value="Update" name="update2"> </td>
										</form>
										</tr>
										
										<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
										<tr>
											
												<label><?= $regerr ?></label>
										</tr>
										<tr>										
												<td> <form action="profile.php"><input type="Submit" value="Cancel" name="cancle"></form></td>
										</tr>	
										
									</table>
								</td>
						
						</tr>
					
					
					
					</table>
					
					
				
						
							
						
				
						
				    
				</td>
				
			
				
				
				<td width="15%" align="middle" valign = "top" bgcolor="#43c1d0">
				    
					<table>
				        
						
						
						<tr>
							
							<td align="middle"><br/><a href="home.php"><input type="Submit" value="HOME" name="home"   /></a></td>
							
						</tr>
						
						<tr>
							
							<td align="middle"><br/><a href="upostad.php"><input type="Submit" value="POST AD" name="ad"/></td>
							
						</tr>
						
						<tr>
							
							<td align="middle"><br/><a href="contact.php"><input type="Submit" value="CONTACT" name="contact"/></a></td>
							
						</tr>
						
						
						
						<tr>
							
							<td align="middle"><br/><a href="logout.php"><input type="Submit" value="LOG OUT" name="index"/></a></td>
							
						</tr>
						
				    </table>
					
				
				
				</td>
				
			</tr>
			
		</table>
		
	</body>
	
</html>	  