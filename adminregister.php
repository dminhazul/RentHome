
		<form method="POST" action="adminregCheck.php">
			<table>
				<tr>
					<td><h1>Create new account here</h1></td>
				</tr><br/>
				<table>
					<tr>
						<td><input type="text" name="name" placeholder="Name"></td>
						<td>&nbsp;&nbsp;&nbsp;<input type="text" name="uname" placeholder="Username"></td>
					</tr>

					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

					<tr>
						<td><input type="text" name="email" placeholder="Email"></td>
						<td>&nbsp;&nbsp;&nbsp;<input type="text" name="phone" placeholder="Phone Number"></td>
					</tr>

					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

					<tr>
						<td>Gender</td>
					</tr>

					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

					<tr>
						<td>
							<input type="radio" name="gender" value="Male" required>Male
							<input type="radio" name="gender" value="Female" required>Female
						</td>
					</tr>

					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

					<tr>
						<td>Select User Type</td>
					</tr>

					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

					<tr>
						<td>
							<select name="usertype">
								<option value="0">--Select--</option>
								<option value="Owner">Owner</option>
								<option value="Customer">Customer</option>
							</select>
						</td>
					</tr>

					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

					<tr>
						<td><input type="password" name="password" placeholder="Password"></td>
						<td>&nbsp;&nbsp;&nbsp;<input type="password" name="password1" placeholder="Confirm Password"></td>
					</tr>

					<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

					<tr>
						<td align="left">
							<input type="submit" name="submit" value="Sign Up">&nbsp;&nbsp;&nbsp;
							<input type="button" value="RESET" onclick="window.location.href='userregistration.php'">
						</td>
					</tr>
				</table>
			</table>
		</form>