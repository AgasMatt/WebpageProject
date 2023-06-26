<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>SPRCNHS - Your Profile</title>
	<link rel="stylesheet" href="style.css">
</head>
</style>
<body>
	<?php
        include("connection.php");
        if (isset($_GET["account"])) {
			include("connection.php");
			echo "<div class=\"topnav\">";
			echo "<a href=\"dashboard.php?account=".$_GET["account"]."\">Home</a><a href=\"teachertable.php?account=".$_GET["account"]."\">View Teachers</a><a href=\"leavetable.php?account=".$_GET["account"]."\">View Teachers on Leave</a>";
			echo "</div>";
		} else {
			echo "<h1>You must be logged in to access this.</h1>";
		}
    ?>
</body>
</html>