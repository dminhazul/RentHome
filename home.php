<?php
   session_start();
   if(isset($_SESSION['username']))
{

}
else
{
	header("Location:login.php");
} 

$name=$_SESSION['fname'];
$unerr="";
	
	if(isset($_POST['search']))
	{
		$c = $_POST['City'];
		if ($c == 0)
        {
			header("Location:Dfilter.php");
		}
		else if ($c == 1)
		{
			header("Location:Cfilter.php");
		}
	}
	
	if (isset($_POST['tsearch']))
	{

		$ts = $_POST['tbsearch'];
		$_SESSION['search']= $ts;
		if ($ts == "" )
		{
			$unerr= "field empty";
		}
		else
		{
			$con=mysqli_connect("localhost","root","","project");			//open database Connection
			if(!$con)
			{
				die("Connection Error: ".mysqli_connect_error()."<br/>");
			}
		$sql="select * from ads where area = '$ts'";
		$result=mysqli_query($con,$sql);	
		if(mysqli_num_rows($result)>0)
		{
					header("Location:Dfilter.php")		;				
		}
		else
		{
			$unerr= "no data found"	;
		}
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
					<tr>
						<td><label><?= $unerr; ?></label></td> 
					</tr>	
				</form>	
		    </table>
		
		
		
		<table valign = "top" width="100%" height="470px">
		
		    <tr>
			
			    <td width="85%" align="middle" bgcolor="#f1ecec"> 
				<font color="red" size="5" align="left">Welcome <?= $name?></font>
				    
					<form method="post" >
					    <table height="90px" width="100%">
							
							<h1 align="middle">Select Your City</h1>
							
							<tr>
							
							    <td valign="top" align="middle" width="20%">
								
							        <select name="City">
							
							            <option value="0">Dhaka</option><option value="1">Chittagong</option>

							
						            </select>
									
								</td>
								
							</tr>
							
							<tr>
							
							    <td align="middle" valign="top" >
								 
								    <input type="Submit" value="Search" name="search"/>

                                </td>
								
							</tr>
							
				        </table>
						
					</form>
				    
				</td>
				
				<td width="15%" align="middle" valign = "top" bgcolor="#43c1d0">
				    
					<table>
				        
						
						

						
						<tr>
							
							<td align="middle"><br/><a href="upostad.php"><input type="Submit" value="POST AD" name="ad"  /></td>
							
						</tr>
							<tr>
							
							<td align="middle"><br/><a href="myad.php"><input type="Submit" value="My AD" name="myad"/></td>
							
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