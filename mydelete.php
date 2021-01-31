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
		<title>Delete Post</title>
	</head>
	<body align="center">
		<form method="post" action="Validation/mydeletecheck.php">
				<table border="0" width="30%" align="center">
					<tr>
						<td colspan="2"><h2><u>Delete Post</u></h2></td>
					</tr>
					<tr>
						<td colspan="2"><input type="hidden" name="id" value="<?=$uid?>"></td>
					</tr>
					<tr>
						<td colspan="2">Do you want to delete this Post ??</td>
					</tr>
					<tr>
						<td colspan="2">Title <strong><?=$row['ad_title']?></strong></td>
					</tr>
				<table border="0" width="30%" align="center">	
					<tr>
						<td height="300" width="300" colspan="2"><img src="<?=$row['Image']?>" alt="Server Image" height="250px" width="250px"/></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Delete"></td>
						<td><a href="showad.php">Cancel</a></td>
					</tr>
				</table>
				</table>
		</form>
	</body>
</html>