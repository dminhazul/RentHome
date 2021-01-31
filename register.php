<!DOCTYPE html>
<html>
	<head>
		<title>Registration form</title>
	</head>
	<body>
		<form method="POST" action="adminregCheck.php">
			<table align="center">
				<tr>
					<td><h1>Create new account here</h1></td>
				</tr>
				<table align="center">
					<tr>
						<td><input type="text" name="name" placeholder="Name"></td>
					</tr>
					<tr>
						<td><input type="text" name="uname" placeholder="Username"></td>
					</tr>
					<tr>
						<td><input type="text" name="email" placeholder="Email"></td>
					</tr>
					<tr>
						<td>Gender</td>
					</tr>
					<tr>
						<td><input type="radio" name="gender" value="Male" required>Male
							<input type="radio" name="gender" value="Female" required>Female</td>
					</tr>
					<tr>
						<td><input type="text" name="phone" placeholder="Phone Number"></td>
					</tr>
					<tr>
						<td>select user</td>
					</tr>
					<tr>
						<td><select name="usertype">
							<option value="Owner">Owner</option>
							<option value="Customer">Customer</option>
						</select></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="Password"></td>
					</tr>
					<tr>
						<td><input type="password" name="password1" placeholder="Confirm Password"></td>
					</tr>
					<tr>
						<td align="right"><input type="submit" name="submit" value="Sign Up"></td>
					</tr>
				</table>
			</table>
		</form>
	</body>
</html>