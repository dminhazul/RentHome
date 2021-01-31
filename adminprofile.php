<?php 
	session_start();
	include_once('db.php');
	$id = $_SESSION['id'];
	$sql = "SELECT * FROM `userdetails` WHERE ID = $id ";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result); 
?> 
<html>

    <head>
	
	    <title>Profile</title>
		
    </head>
	
	<body>
	
	    <table width="100%" height="80px" bgcolor="#43c1d0" >
		
			<form method="post" >
			
				<tr>
				
					<td width="25%" align="middle" colspan="2"><font face = "Comic sans MS"><h1>PALACE.COM</h1></font></td>
				
				</tr>
				<tr>
					<td align="right" width="90%">Welcome, <?=$row['Username']?></td>
					<td></td>
				</tr>
			</form>
			
		</table>
		
		<table width="100%" height="470px">
		
		    <tr>
			
			    <td width = "85%" align="center" bgcolor = "#f1ecec">
				
				    <table  width="30%" border="0" align="center" valihn="top" style="margin: 0px;padding: 0px;">
						<tr>
							<td width="10%">Name</td>
							<td width="10%">:</td>
							<td width="10%"><?=$row['Name']?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><?=$row['Email']?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td><?=$row['Gender']?></td>
						</tr>
						<tr>
							<td>Phone Number</td>
							<td>:</td>
							<td><?=$row['Phone']?></td>
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