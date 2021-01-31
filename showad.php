<html>
    <head>
	    <title>Show Ad</title>
    </head>
	<body>
		
	        <table width="100%" height="80px" bgcolor="#43c1d0" >
				<form method="post" >
					<tr>
						<td width="25%" align="center"><font face = "Comic sans MS"><h1>PALACE.COM</h1></font></td>						
					</tr>
				</form>	
		    </table>
		    <table valign = "top" width="100%" height="470px">
		
		    <tr>
			
			    <td width="85%" align="center" bgcolor="#f1ecec"> 
				    
					<?php 
					include_once("db.php");
					
					$sql = "select * from ads ";
					$result = mysqli_query($con, $sql);
					$resultCheck = mysqli_num_rows($result);

					echo "<table align='left' width='70%' border='1'>
					         <tr>
					         	<td>Image</td>
					         	<td>ID</td>
					         	<td>Area</td>
					         	<td>Details</td>
					         	<td>Full Address</td>
					         	<td>Masterbed</td>
					         	<td>Singlebed</td>
					         	<td>Balcony</td>
					         	<td>Washroom</td>
					         	<td>Rent</td>
					         	<td>Username</td>
					         	<td>Contact</td>
					         	<td colspan='2'>Action</td>
					         </tr>";

					if ($resultCheck > 0) {
						
						while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>
					         	<td><img src='{$row['Image']}' hight='100px' width='100px'></td>
					         	<td>{$row['id']}</td>
					         	<td>{$row['area']}</td>
					         	<td>{$row['house_details']}</td>
					         	<td>{$row['full_address']}</td>
					         	<td>{$row['masterbed']}</td>
					         	<td>{$row['singlebed']}</td>
					         	<td>{$row['balcony']}</td>
					         	<td>{$row['washroom']}</td>
					         	<td>{$row['rent']}</td>
					         	<td>{$row['username']}</td>
					         	<td>{$row['number']}</td>
					         	<td><a href='update.php?id={$row['id']}'>Edit</a></td>
					         	<td><a href='delete.php?id={$row['id']}'>Delete</a></td>
					         </tr>";
						}
					}
					echo "</table>";
					?>
				    
				</td>
				
				<td width="15%" align="center" valign = "top" bgcolor="#43c1d0">
				    
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