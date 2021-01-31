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
	    <title>Home</title>
    </head>
	<body>
	        <table width="100%" height="80px" bgcolor="#43c1d0" >
				<form method="post" >
					<tr>
				
						<td width="25%" align="middle"><font face = "Comic sans MS"><h1>PALACE.COM</h1></font></td>
						
						<td width="50%" align="left"><input type="text" size = "70" name="tbsearch" placeholder="Search Your Loaction!"/>
						
						<input type="Submit" value="Search" name="tsearch"/></td>
						
						<td width="25%" align="left"> <a href = "https://google.com/maps"><h3>Search using map</h3></a></td> 
				
					</tr>
				</form>	
		    </table>
		    <table valign = "top" width="100%" height="470px">
		
		    <tr>
			
			    <td width="85%" align="center" bgcolor="#f1ecec"> 
					<form method="post" action="Validation/useraddpost.php" enctype="multipart/form-data">
			<table width="100%" height="480px" >
		    <tr align="center">
			    <td width="85%"  valign="top" bgcolor="#f1ecec"> 
			    		<table align="center">
							<tr>
								<td  colspan="2">
									<font align="left" size="5"><b>Submit imformation</b></font>
								</td>
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								 <td>Area:</td>
								<td>
									<select name="Area">
										<option value="Bashundhara">Bashundhara</option>
										<option value="Kuril">Kuril</option>
										<option value="Rampura">Rampura</option>
										<option value="Mirpur">Mirpur</option>
									</select>
								</td>
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								<td>Master Bad:</td>
								<td>
									<select name="MasterBed">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>	
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								<td>Bedroom:</td>
								<td>
									<select name="SingleBed">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>	
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								<td>Balcony:</td>
								<td>
									<select name="Balcony">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
								</td>	
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								<td>Washroom:</td>
								<td>
									<select name="Washroom">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
			
									</select>
								</td>	
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								<td>Username:</td>
								<td>
									<input type="text" name="username" value="<?=$uname?>" size="40" /><br/>
								</td>	
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								<td>Rent</td>
								<td>
									<input type="text" name="price" size="40">
								</td>	
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								<td>AD Title:</td>
								<td>
									<input type="text" name="title" size="40" /><br/>
								</td>	
							</tr>
							<tr>
								<td>Full Address:</td>
								<td>
									</br> <input type="text" name="address" size="40" /><br/>
								</td>	
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								<td>Contact Number:</td>
								<td>
									<input type="text" name="contact" size="40" /><br/>
								</td>	
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								<td>House details:</td>
								<td>
									<input type="text" name="details" size="40" /><br/>
								</td>	
							</tr>
							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr valign="top" align="left" width="20%">
								<td>Upload home images:</td>
								<td><input type="file" name="file"></td>
						    </tr>

							<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
							<tr>
								<td>
									<input type="submit" name="submit" value="Add Post">
								</td>	
							</tr>
							        
						</table>
			    	</td>
				</tr>
			</table>
		
		</form>
				    
					
				</td>
				
				<td width="15%" align="center" valign = "top" bgcolor="#43c1d0">
				    
					<table>
							<tr>
							
							<td align="middle"><br/><a href="home.php"><input type="Submit" value="HOME" name="home"   /></a></td>
							
						</tr>
						
						<tr>
							
							<td align="middle"><br/><a href="profile.php"><input type="Submit" value="PROFILE" name="profile"/></a></td>
							
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