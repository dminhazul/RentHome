<?php
	include_once('db.php');

	$sql = "select * from userdetails";
	$result = mysqli_query($con, $sql);
	$resultCheck = mysqli_num_rows($result);
	if (0) {
		while ($row = mysqli_fetch_assoc($result)) {
			var_dump($row);
			return;
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Tolet</title>
	</head>
	<body>
		<form method="post" action="checkaddtolet.php">
			<table>
				<tr>
					<td>Short Description</td>
					<td><input type="text" name="productdescription" size=30% placeholder="Product Description"></td>
				</tr>
				<tr>
					<td>Select Image</td>
					<td align="center"><input type="file" name="file" ></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>