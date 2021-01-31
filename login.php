<?php
session_start();
 error_reporting(0);
	$unerr="";				//error handeling label
	$regerr="";	
	if( isset($_POST['login']))
	{
		//login using user table of database
		$userName 	= $_POST['username'];
		$password 	= $_POST['password'];

		
		$con=mysqli_connect("localhost","root","","project");			//open database Connection
			if(!$con)
			{
				die("Connection Error: ".mysqli_connect_error()."<br/>");
			}
		$sql="select * from user where username = '$userName' and password='$password'";
		$result=mysqli_query($con,$sql);	
		if(mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_array($result);
			$fname=$row['firstname'];
			$lname=$row['lastname'];
			$email=$row['email'];
			$phone= $row['phone'];
			$gender= $row['gender'];
			$dd= $row['day'];
			$mm= $row['month'];
			$yyyy = $row['year'];
			$_SESSION['username']=$userName;
			$_SESSION['fname']=$fname;
			$_SESSION['lname']=$lname;
			$_SESSION['email']=$email;
			$_SESSION['phone']=$phone;
			$_SESSION['gender']=$gender;
			$_SESSION['day']=$dd;
			$_SESSION['month']=$mm;
			$_SESSION['year']=$yyyy;
			
			header('location: home.php');
		
		}
		else
		{	
			if($userName=="" || $password=="")
			{	
				$unerr="Field is empty";
			}
			else
			{
				$unerr="Please enter valid username & password";
			}
		}
	
		mysqli_close($con);
	
		
	}
	else if(isset($_POST['sign']))
	{	//craeting account by saving data in user table
		$username=$_POST['username'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = strtolower($_POST['email']);
		$phonenumber = $_POST['phonenumber'];
		$newpassword = $_POST['newpassword'];
		$confirmpassword = $_POST['confirmpassword'];
		$gender   = $_POST['gender'];
		$dd = $_POST['Day'];
		$mm = $_POST['Month'];
		$yyyy = $_POST['Year'];
		//cheaking unique username
		$con=mysqli_connect("localhost","root","","project");
		if(!$con)
		{
			die("Connection Error: ".mysqli_connect_error()."<br/>");
		}
		$sql="select * from user where username = '$username'";
		$result=mysqli_query($con,$sql);	
		if(mysqli_num_rows($result)>0)
		{
		 
			$regerr="User name is already taken";
			
		}
		else
		{
			//All form Validation
			if($fname == "" || $lname == "" || $username == "" || $email == "" || $phonenumber == "" || $newpassword == "" ||  $confirmpassword == "" )
			{
				$regerr="Please fill all the sections";
			}
			else if(!preg_match("/^[a-zA-Z ]*$/",$fname))
			{
				$regerr="Please give a valid name";
			}
			else if(strlen($fname)>30)
			{
				$regerr="Name can contain maximum 30 character";	
			}
			else if(!preg_match("/^[a-zA-Z0-9]*$/",$lname))
			{
				$regerr="Please give a valid user name";
			}
			else if(strlen($lname)>20)
			{
				$regerr="User name can contain maximum 20 character";
			}
			else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$regerr="Please give a valid email address";	
			}
			else if(!preg_match("/^[0-9]*$/",$phonenumber))
			{
				$regerr="Please give a valid phone number";
			}
			else if(strlen($phonenumber)!=11)
			{
				$regerr="your number must be in 11 digit";
			}
			else if($dd==0 || $mm==="Month" || $yyyy==0)
			{
				$regerr="Please give a date of birth";
			}
			else if(strlen($newpassword)<6)
			{
				$regerr="Password should have minimum 6 character";
			}
			else if($newpassword!=$confirmpassword)
			{
				$regerr="Password not matched please check again";
			}
			else if($gender=="")
			{
				$regerr="please Select your Gender first";
			}
			else 
			{
				$con=mysqli_connect("localhost","root","","project");
				if(!$con)
				{
					die("Connection Error: ".mysqli_connect_error()."<br/>");
				}
				//Row Insert
	
				$sql="INSERT INTO user(username,firstname,lastname,email,phone,password,gender,day,month,year) VALUES('$username','$fname','$lname','$email','$phonenumber','$newpassword','$gender','$dd','$mm','$yyyy')";
				$sql2="INSERT INTO photos(uname) VALUES('$username')";
				if(mysqli_query($con,$sql))
				{	
					if(mysqli_query($con,$sql2))
					{
						$unerr="Created Account Successfully Login From Here";
						$fname=$lname=$username=$email=$phonenumber=$newpassword=$confirmpassword="";

					}
					else
					{						
						echo "Error in inserting: ".mysqli_error($con);
					}
				}
				else
				{
					echo "Error in inserting: ".mysqli_error($con);
				}
				mysqli_close($con);		
			}
		
		}
	}
	if(isset($_POST['adminpanel']))
	{
		header("location:adminlogin.php");
	}
	
?>

<html>

    <head>
	 
	    <title>log in || sign up</title>
		
	</head>
	
	<body>

	    <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
			
		    <table bgcolor="#43c1d0" width="100%" height="80px" align="middle" method="post">

			    <tr>
					
				    <td width="25%" align="center"><font face = "Comic sans MS"><h1>PALACE.COM</h1></font></td>
					
					</td>
                    <td width="10%" align="left">Username: <br/><input size = "21" type="text" name="username" placeholder="Please Enter Your Name" value="<?php echo $userName;?>" />

			
					<td width="10%" align="left">Password: <br/><input size = "21" type="password" name="password" placeholder="Password"/>
					
				
                    <td width = "21%"align="left"></br><input type="Submit" value="Log in" name="login"/></td>
                    <td width = "22%"align="left"></br><input type="Submit" value="Admin Panel" name="adminpanel" /></td>

                </tr>
				<tr align = "right">
					<td width = "25%"></td>	 				
					<td width="10%" align = "left"><label><?= $unerr; ?></label></td> 
					<td width="10%"></td>
					
					<td width="43%"></td>
					
					
				</tr>
				</tr>	
		</form>		
		<table width = "100%">		
			
			<tr>
				<td width="50%" height = "80px" valign = "top" align="middle">
			
			        <table >
				
				        <td >
					    
						    <img src="palace.jpg" width="415px" height="400px">
						
					    </td>

				    </table>
			    
				</td>
				<td width = "10"></td>
				
				<td width="40%" height = "80px" valign="top" align="left">
				
				    <h2 >Create new account here</h2><br/>
				
				    <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
		
		                <table>
							<tr>
								<td colspan=2>
									<input type="text" name="username" placeholder="Select a user name which must be unique" value="<?php echo $username;?>" size=50px/>
								</td>
							</tr>
							
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							
				            <tr>
									
						        <td width = "52%">
									
									<input type="text" name="fname" placeholder="First Name" value="<?php echo $fname;?>"/>
								</td> 
								
								<td>
									
									 <input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname;?>"/>
								</td>
								
								
						    </tr>
							
					        <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						
						    <tr>	
							
							    <td><input type="text" name="email" placeholder="Email" value="<?php echo $email;?>"/></td> 
								<td><input type="text" name="phonenumber" placeholder="Phone Number" value="<?php echo $phonenumber;?>"/></td>
								
						    </tr>
							
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
					
						    <tr>
							
							    <td><input type="password" name="newpassword" placeholder="Enter Password" value="<?php echo $newpassword;?>"/></td> 
								
								<td><input type="password" name="confirmpassword" placeholder="Confirm Password" /> </td>
								
				            </tr>
							
					    </table>
						<label><?= $regerr ?></label>
	                    <p>Gender</p>
						
						<table>
						
							<tr><input type="radio" name="gender" value="male"  />MALE <input type="radio" name="gender" value="female"/>FEMALE <input type="radio" name="gender" value="Other"/>OTHER</tr>
							
					    </table>

					    <br/>Date of Birth<br/>

					    <select name="Day" >
					    
						    <option value="0">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
						    <option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option>
						    <option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option>
						    <option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option>
						    <option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option>
						    <option value="30">30</option><option value="31">31</option>
							
							
							
					    </select>
					
					    <select name="Month" >
					    
						<option value="0">Month</option><option value="Jan">Jan</option><option value="Feb">Feb</option><option value="Mar">Mar</option><option value="Apr">Apr</option><option value="May">May</option>
						<option value="Jun">Jun</option><option value="Jul">Jul</option><option value="Aug">Aug</option><option value="Sep">Sep</option><option value="Oct">Oct</option><option value="Nov">Nov</option>
						<option value="Dec">Dec</option>
						
						
					    
					    </select>
					
					    <select name="Year" >
					
						<option value="0">Year</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option>
						<option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option>
						<option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option>
						<option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option>
						<option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option>
						<option value="1990">1990</option>
						</select>
					
					    <p><input type="Submit" value="Sign up" name="sign" /> &nbsp;&nbsp;&nbsp;<input type="button" value="RESET" onclick="window.location.href='login.php'"></p>
						
					</form>
					
				</td>
				
			</tr>
			
		</table>
			
			
		
		
		
	</body>
	
</html>
