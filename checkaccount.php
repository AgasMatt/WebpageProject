<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Untitled</title>
	</head>
	
	<body>
		<?php
			include("functions.php");
			include("connection.php");
			if (@$mail = $_POST["email"]) {
				if (mysqli_query($connection, "INSERT INTO admintble (Name, Email, Username, Password, SecurityQ, Answer) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["username"]."', '".$_POST["pass"]."', '".$_POST["secq"]."', '".$_POST["answer"]."');")) {
					echo "Success.";
					header("Location: dashboard.php?account=".$_POST["username"]);
				}
			}
			if (@$answer = $_POST["ans"]) {
				if (check_security($_POST["secq"], $answer)) {
					echo "Success.";
					header("Location: dashboard.php?account=".$_GET["user"]);
				} else {
					header("Location: login.php");
				}
			}
		?>
	</body>
</html>