<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Untitled</title>
	</head>
	
	<body>
		<?php
			include("functions.php");
			include("connection.php");
			if (@$mail = $_POST["mail"]) {
				if (mysqli_query("INSERT INTO admintble (Name, Email, Username, Password, SecurityQ, Answer) VALUES ('".$_POST["name"]."', '".$_POST["mail"]."', '".$user."', '".$_POST["pass"]."', '".$_POST["secq"]."', '".$_POST["answer"]."');")) {
					echo "Success.";
				}
			}
			if ($answer = $_POST["ans"]) {
				if (check_security($_POST["secq"], $answer)) {
					echo "Success.";
				} else {
					header("Location: login.php");
				}
			}
			echo "Location: dashboard.php?account=".$_POST["user"];
		?>
	</body>
</html>