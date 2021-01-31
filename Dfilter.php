<?php
   session_start();
   if(isset($_SESSION['username']))
{

}
else
{
	header("Location:login.php");
} 

	if (isset($_POST['tsearch']))
	{

		$ts = $_POST['tbsearch'];
		if ($ts == "" )
		{
			echo "enter something";
		}
		else
		{
			
			header("Location:home.php")	;
		
		}
	}

?>
<html>

    <head>
	
	    <title>DFilter</title>
		
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
			
			
			    <td width="85%" valign = "top"  bgcolor="lightgray">
				
					
					    <?php 
					    
					include_once("db.php");
					$search = $_SESSION['search'];
					
					$sql = "SELECT * from ads WHERE area='$search' ";
					$result = mysqli_query($con, $sql);
					$resultCheck = mysqli_num_rows($result);

					echo "<table align='left' width='70%' border='1'>
					         <tr>
					         	<td>Image</td>
					         	<td>ID</td>
					         	<td>Area</td>
					         	<td>Details</td>
					         	<td>Masterbed</td>
					         	<td>Singlebed</td>
					         	<td>Balcony</td>
					         	<td>Washroom</td>
					         	<td>Rent</td>
					         	<td>Username</td>
					         	<td>Contact</td>
					         	
					         </tr>";

					if ($resultCheck > 0) {
						
						while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>
					         	<td><img src='{$row['Image']}' hight='100px' width='100px'></td>
					         	<td>{$row['id']}</td>
					         	<td>{$row['area']}</td>
					         	<td>{$row['house_details']}</td>
					         	<td>{$row['masterbed']}</td>
					         	<td>{$row['singlebed']}</td>
					         	<td>{$row['balcony']}</td>
					         	<td>{$row['washroom']}</td>
					         	<td>{$row['rent']}</td>
					         	<td>{$row['username']}</td>
					         	<td>{$row['number']}</td>
					         	
					         	
					         </tr>";
						}
					}
					echo "</table>";
					?>
						
						
					
				    
				</td>
				
				
				<td width="15%" align="middle" valign = "top" bgcolor="#43c1d0">
				    
					<table>
				        
						
						
						<tr>
							
							<td align="middle"><br/><a href="home.php"><input type="Submit" size = "50" value="HOME" name="home"/></a></td>
							
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
							
							<td align="middle"><br/><a href="logout.php"><input type="Submit" value="LOG OUT" name="index"/></a></td>
							
						</tr>
						
				    </table>
					
				
				
				</td>
				
			</tr>
			
			
			
		</table>
		
	</body>
	
</html>	  