<!DOCTYPE html>
<html>
	<head>
		<title>Add post</title>
	</head>
	<body>
		<form method="post" action="Validation/addpost.php" enctype="multipart/form-data">
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
									<input type="text" name="username" size="40" /><br/>
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
	</body>
</html>