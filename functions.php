<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Untitled</title>
	</head>
	
	<body>
		<?php
			function find_name($name) {
				include("connection.php");
				$result = mysqli_query($connection, "SELECT * FROM admintble");
				while ($rows = mysqli_fetch_array($result)) {
					if ($name == $rows[2]) {
						return true;
					}
				}
				return false;
			}
			function find_pass($pass) {
				include("connection.php");
				$result = mysqli_query($connection, "SELECT * FROM admintble");
				while ($rows = mysqli_fetch_array($result)) {
					if ($pass == $rows[3]) {
						return true;
					}
				}
				return false;
			}
			function check_pass($pass, $conf) {
				if (find_pass($pass)) {
					if ($pass == $conf) {
						return true;
					}
				}
				return false;
			}
			function info_found($name, $pass, $conf) {
				if (find_name($name) && check_pass($pass, $conf)) {
					return true;
				}
				return false;
			}
		?>
	</body>
</html>
