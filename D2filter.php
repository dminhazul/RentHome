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
	
	    <title>DFilter</title>
		
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
			
			
			    <td width="85%" valign = "top"  bgcolor="lightgray">
				
					
					    <table height="40px" width="55%">
						
							
							<tr align = "left">
							
							
							    
								
								<td valign="top" align="left" >
								
							        <select name="Area">
							
							            <option>Area</option><option>Bashundhara</option><option>Kuril</option><option>Rampura</option><option>Mirpur</option>
							
						            </select>
									
								</td>
								
								<td valign="top" align="middle" >
								
							        <select name="Master Bed">
							
							            <option>Master Bed</option><option>1</option><option>2</option><option>3</option>
							
						            </select>
									
								</td>
								
								<td valign="top" align="left" >
								
							        <select name="Single Bed">
							
							            <option>Single Bed</option><option>1</option><option>2</option><option>3</option>
							
						            </select>
									
								</td>
								
								<td valign="top" align="left" >
								
							        <select name="Balcony">
							
							            <option>Balcony</option><option>1</option><option>2</option><option>3</option>
							
						            </select>
									
								</td>
								<td valign="top" align="left" >
								
							        <select name="Washroom">
							
							            <option>Washroom</option><option>1</option><option>2</option><option>3</option>
							
						            </select>
									
								</td>
								<td valign="top" align="left" >
								
							        <select name="Rent">
							
							            <option>Rent</option><option>Buy</option>
							
						            </select>
									
								</td>
								<td align="left" valign="top" >
								 
								    <a href="D2filter.php"><input type="Submit" value="Filter" name="filter"/>

                                </td>
								
							</tr>
							
							
				        </table>
						<table align = "middle">
							<tr>
								<td valign="top" align="left" width = "20%">
								<img src="w.jpeg"width="206"height="150"> </br> <a href = "">2 Bed Apertment</a>
								</td>
								<td valign="top" align="left" width = "20%">
								<img src="w2.jpeg"width="206"height="150"> </br> <a href="">2 Bed 2 Washroom</a>
								</td>
								<td valign="top" align="left" width = "20%">
								<img src="w3.jpeg"width="206"height="150"> </br> <a href="">2 Master bed 2 Bed</a>
								</td>
								<td valign="top" align="left" width = "20%">
								<img src="w.jpeg"width="206"height="150"> </br> <a href = "">2 Bed Apertment</a>
								</td>
								<td valign="top" align="left" width = "20%">
								<img src="w2.jpeg"width="206"height="150"> </br> <a href="">2 Bed 2 Washroom</a>
								</td>
							</tr>
							
							<tr>
								<td valign="top" align="left" width = "20%">
								<img src="w2.jpeg"width="206"height="150"> </br> <a href="">2 Bed 2 Washroom</a>
								</td>
								<td valign="top" align="left" width = "20%">
								<img src="w3.jpeg"width="206"height="150"> </br> <a href="">2 Master bed 2 Bed</a>
								</td>
								<td valign="top" align="left" width = "20%">
								<img src="w.jpeg"width="206"height="150"> </br> <a href = "">2 Bed Apertment</a>
								</td>
								<td valign="top" align="left" width = "20%">
								<img src="w2.jpeg"width="206"height="150"> </br> <a href="">2 Bed 2 Washroom</a>
								</td>
								<td valign="top" align="left" width = "20%">
								<img src="w3.jpeg"width="206"height="150"> </br> <a href="">2 Master bed 2 Bed</a>
								</td>
								
							</tr>
							
						
						</table>
						
						
					
				    
				</td>
				
				
				<td width="15%" align="middle" valign = "top" bgcolor="orange">
				    
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