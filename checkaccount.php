<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Untitled</title>
	</head>
	
	<body>
		<?php
			include("functions.php");
			include("connection.php");
			$user = $_POST["username"];
			if (@$mail = $_POST["mail"]) {
				if (mysqli_query("INSERT INTO admintble (Name, Email, Username, Password, SecurityQ, Answer) VALUES ('".$_POST["name"]."', '".$_POST["mail"]."', '".$user."', '".$_POST["pass"]."', '".$_POST["secq"]."', '".$_POST["ans"]."');")) {
					echo "Success.";
				}
			}
			header("Location: dashboard.php?account=".$user.";")
		?>
	</body>
</html>
