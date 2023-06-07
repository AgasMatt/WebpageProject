<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Untitled</title>
	</head>
	
	<body>
		<?php
			include("functions.php");
			include("connection.php");
			@$name = $_POST["name"];
			@$pass = $_POST["pass"];
			@$conf = $_POST["confirm"];
			if (info_found($name, $pass, $conf)) {
				$result = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM admintble WHERE Username=\"".$name."\""));
				echo "<form action=\"checkaccount.php\"><table>";
				echo "<tr style=\"display: none;\"><td>Username</td><td><input type=\"text\" name=\"user\" value=\"".$name."\"></td></tr>";
				echo "<tr style=\"display: none;\"><td>Password</td><td><input type=\"text\" name=\"pass\" value=\"".$pass."\"></td></tr>";
				echo "<tr style=\"display: none;\"><td>Confirm password</td><td><input type=\"text\" name=\"confirm\" value=\"".$conf."\"></td></tr>";
				echo "<tr><td>".$result[4]."</td><td><input type=\"text\" name=\"ans\" required></td></tr>";
				echo "</table><input type=\"submit\"></form>";
			} else {
				header("Location: login.php");
			}
		?>
	</body>
</html>
