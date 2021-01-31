<?php

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
						
						<td width="25%" align="left"> <a href = "https://google.com/maps">Search using map</a></td> 
				
					</tr>
				</form>	
		    </table>
		
		<table width="100%" height="470px">
		
		    <tr>
			
			    <td width = "85%" valign = "middle" align="middle" bgcolor = "lightgray">
				
				    <table>
						<tr>
							<h1>Do you want to  add location in map?</h1>
						</tr>
						
						<tr>
							<td><a href = "mylocation.php"><h2>Yes</a></h2></td>     <td></td><td></td><td></td><td></td><td></td>        
							<td><a href = "home.php" ><h2>Skip</h2></a></td>
						</tr>
						
						
					</table>
					
				</td>
				
				<td width="15%" align="middle" valign = "top" bgcolor="#43c1d0">
				    
					<table>
				        
						
						
						<tr>
							
							<td align="middle"><br/><a href="home.php"><input type="Submit" value="HOME" name="home"   /></a></td>
							
						</tr>
						
						<tr>
							
							<td align="middle"><br/><a href="postad.php"><input type="Submit" value="POST AD" name="ad"/></td>
							
						</tr>
						
						<tr>
							
							<td align="middle"><br/><a href="contact.php"><input type="Submit" value="CONTACT" name="contact"/></a></td>
							
						</tr>
						
						<tr>
							
							<td align="middle"><br/><a href="profile.php"><input type="Submit" value="PROFILE" name="profile"/></a></td>
							
						</tr>
						
						<tr>
							
							<td align="middle"><br/><a href="login.php"><input type="Submit" value="LOG OUT" name="index"/></a></td>
							
						</tr>
						
				    </table>
					
				
				
				</td>
				
			</tr>
			
		</table>
		
	</body>
	
</html>