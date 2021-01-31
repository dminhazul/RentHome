<?php
	include_once('db.php');
	$uid = $_GET['id'];
	$sql = "select * from ads where Id = $uid";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
    <head>
	    <title>Home</title>
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
				
				    <form method="post" action="Validation/updateCheck.php">
						<table align="center" border="0">
							<tr>
								<td align="center"><b><h3>Update Post<h3></td>
							</tr>
							<tr>
								<td><input type="hidden" name="id" value="<?=$uid?>"></td>
								<td></td>
							</tr>
							<tr>
								<td>Area :</td>
								<td><input type="text" name="area" placeholder="Area" value="<?=$row['area']?>"></td>
								<td></td>
							</tr>
							<tr>
								<td>Masterbed :</td>
								<td><input type="text" name="masterbed" placeholder="Masterbed" value="<?=$row['masterbed']?>"></td>
								<td></td>
							</tr>
							<tr>
								<td>Singlebed : </td>
								<td><input type="text" name="singlebed" placeholder="Singlebed" value="<?=$row['singlebed']?>"></td>
								<td></td>
							</tr>
							<tr>
								<td>Balcony : </td>
								<td><input type="text" name="balcony" placeholder="Balcony" value="<?=$row['balcony']?>"></td>
								<td></td>
							</tr>
							<tr>
								<td>Washroom : </td>
								<td><input type="text" name="washroom" placeholder="Washroom" value="<?=$row['washroom']?>"></td>
								<td></td>
							</tr>
							<tr>
								<td>Rent : </td>
								<td><input type="text" name="rent" placeholder="Rent" value="<?=$row['rent']?>"></td>
								<td></td>
							</tr>
							<tr>
								<td>Ad Title : </td>
								<td><input type="text" name="ad_titil" placeholder="Ad Title" value="<?=$row['ad_title']?>"></td>
								<td></td>
							</tr>
							<tr>
								<td>Full Address : </td>
								<td><input type="text" name="fulladdress" placeholder="Full Address" value="<?=$row['full_address']?>"></td>
								<td></td>
							</tr>
							<tr>
								<td>Phone Number : </td>
								<td><input type="text" name="pnnumber" placeholder="Phone Number" value="<?=$row['number']?>"></td>
								<td></td>
							</tr>
							<tr>
								<td>House Details : </td>
								<td><input type="text" name="houseditels" placeholder="House Details" value="<?=$row['house_details']?>"></td>
								<td></td>
							</tr>
							<tr>
								<td><input type="submit" name="submit" value="Update"></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="showad.php">Cancel</a></td>
							</tr>

						</table>
					</form>
					
				    
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