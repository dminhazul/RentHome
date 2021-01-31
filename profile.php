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

?>
<html>

    <head>
	
	    <title>Profile</title>
		
    </head>
	
	<body>
	
	    
	
	        <table width="100%" height="80px" bgcolor="#43c1d0" >
				<form method="post" >
					<tr>
				
						<td width="25%" align="middle"><font face = "Comic sans MS"><h1><a style="text-decoration:none" href="home.php" >PALACE.COM</a></h1></font></td>
						
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
								<td width="70%" align="left" valign = "top">
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
										</tr>
					
									</table>
								</td>
						
						</tr>
					
					
					
					</table>
					
					
				
						<table>
							<tr>
								<td><a href="upinfo.php"><input type="Submit" value="Update info"></td>
							
							</tr>
							
							<tr>
								<td><a href="uppass.php"><input type="Submit" value="Update Password"></td>
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