<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>SPRCNHS - Table of Teachers</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	include("connection.php");
	if (isset($_GET["account"])) {
		echo "<div class=\"topnav\">";
		echo "<a href=\"dashboard.php?account=".$_GET["account"]."\">Home</a><a href=\"leavetable.php?account=".$_GET["account"]."\">View Teachers on Leave</a><a href=\"profile.php?account=".$_GET["account"]."\">Profile</a>";
		echo "</div><center><table><tr><th>FIRST NAME</th><th>MIDDLE NAME</th><th>LAST NAME</th><th>STATUS</th><th>BIRTH PLACE</th><th>SALARY</th><th>BIRTH DATE</th><th>EMP STAT</th><th>TIN</th><th>SG</th><th>GENDER</th><th>COURSE</th><th>POST GRAD</th><th>GRADE LEVEL</th><th>AGE</th></tr>";
		$result = mysqli_query($connection, "select * from trtable");
		if (mysqli_num_rows($result) >0){
			while ($rows = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>". $rows[0]. "</td>";
				echo "<td>". $rows[1]. "</td>";
				echo "<td>". $rows[2]. "</td>";
				echo "<td>". $rows[3]. "</td>";
				echo "<td>". $rows[4]. "</td>";
				echo "<td>". $rows[5]. "</td>";
				echo "<td>". $rows[6]. "</td>";
				echo "<td>". $rows[7]. "</td>";
				echo "<td>". $rows[8]. "</td>";
				echo "<td>". $rows[9]. "</td>";
				echo "<td>". $rows[10]. "</td>";
				echo "<td>". $rows[11]. "</td>";
				echo "<td>". $rows[12]. "</td>";
				echo "<td>". $rows[13]. "</td>";
				echo "<td>". $rows[14]. "</td>";
				echo "</tr>";
			}
		}
		echo "</table><a class=\"updater\" href=\"addtotrtable.php?account=".$_GET["account"]."\">ADD RECORDS</a></center>";
	} else {
		echo "<h1>You must be logged in to access this.</h1>";
	}
?>
</body>
</html>
