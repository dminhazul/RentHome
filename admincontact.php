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
	
	    <title>Contact</title>
		
    </head>
	
	<body>
	
	    <table width="100%" height="80px" bgcolor="#43c1d0" >
				<form method="post" >
					<tr>
				
						<td width="25%" align="middle"><font face = "Comic sans MS"><h1>PALACE.COM</h1></font></td>
				
					</tr>
				</form>	
		    </table>
		
		<table width="100%" height="470px">
		
		    <tr>
			
			    <td width = "85%" align="middle" bgcolor = "#f1ecec">
				
				    <table  width="100%">
						
						<h1 align="middle">Contact Details</h1>
							
						<tr align="middle">
							
						    <h3>Company Name : PALACE<br/>
							Email : palace@gmail.com<br/>
							Phone : 01851080223</br>
							Address : R#6A, H#201, Dhanmondi, Dhaka, Bangladesh </h3>
								
						</tr>
							
				    </table>
					
				</td>
				
				<td width="15%" align="middle" valign = "top" bgcolor="#43c1d0">
				    
					<table>
				        
						
						
						<tr>
							
							<td align="center"><br/><a href="adminhome.php"><input type="Submit" value="HOME" name="home"/></a></td>
							
						</tr>
						<tr>
							
							<td align="center"><br/><a href="showad.php"><input type="Submit" value="SHOW AD" name="ad"/></td>
							
						</tr>
						
						<tr>
							
							<td align="center"><br/><a href="adminprofile.php"><input type="Submit" value="PROFILE" name="profile"/></a></td>
							
						</tr>
						<tr>
							
							<td align="center"><br/><a href="admincontact.php"><input type="Submit" value="CONTACT" name="contact"/></a></td>
							
						</tr>
						<tr>
							
							<td align="center"><br/><a href="aboutus.php"><input type="Submit" value="USER DETAILS" name="ud"/></a></td>
							
						</tr>

						<tr>
							
							<td align="center"><br/><a href="logoutCheck.php"><input type="Submit" value="LOG OUT" name="logout"/></a></td>
							
						</tr>
						
				    </table>
					
				
				
				</td>
				
			</tr>
			
		</table>
		
	</body>
	
</html>