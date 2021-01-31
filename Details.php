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
			header("Location:Dfilter.php");
		}
	}

?>
<html>

    <head>
	
	    <title>Details</title>
		
    </head>
	
	<body>
	
	    
	
	        <table width="100%" height="80px" bgcolor="orange" >
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
							<td><img src="w.jpeg" width="280px" height="300px" alt="SorryNoImage"><br/><br/></td>
								<td width="55%" align="left" valign = "top">
									<table>
										
										<tr><td><b><font size="6">2 Bedroom Apartment</b></td></tr></font>
										<tr><td><b><font size="4">Full address:</b></td></tr></font>
										<tr><td><b><font size="4">96/1 C,Monessor Road,Zigatola,Dhanmondi,Dhaka</b></td></tr></font>
										
										<tr><td><b><font size="4">Contact:01851080223</b></td></tr></font>
										<tr><td><b><font size="3"><a href = "https://google.com/maps">Locate in map</a> </tr></td></b></font>
										
									</table>
									
								</td>
						
						</tr>
					
					
					
					</table>
						<table>
							<tr>
								<td width="50%"><p><font size="5">House Details:This is two bed with big ground outside.
														We have car parking space<br/>
														which apertment owner can use for free.
														This house got 2 washroom and 1 kitchen,</br>
														1 dining & 1 drawing room.Sunlight advantage availabe.
									</p>
									</font>
								
								
								
								
								</td>
							</tr>
						</table>
					
					
				
						<table>
							<tr>
								<td><a href="verfrev.php"><input type="button" value="Verified past owner review"></td>
							
							</tr>
							
							
							
						</table>
							
						
				
						
				    
				</td>
				
			
				
				
				<td width="15%" align="middle" valign = "top" bgcolor="orange">
				    
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
							
							<td align="middle"><br/><a href="logout.php"><input type="Submit" value="LOG OUT" name="index"/></a></td>
							
						</tr>
						
				    </table>
					
				
				
				</td>
				
			</tr>
			
		</table>
		
	</body>
	
</html>	