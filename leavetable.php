<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>
<style>
	body{
		
		margin-top: 25vh;
	}
	table, th, tr{
		border: 3px solid black;
		border-collapse: collapse;
		height: 4vh;
		width: 90vw;
		background: #daeaf6;
		margin: 2vh;
	}
    td{
		border: 2px solid black;
	}
</style>
<body>
<center>
	
<table>
	<tr>
		<th>NAME</th>
		<th>START DATE</th>
		<th>END DATE</th>
		<th>NO. OF DAYS</th>
		<th>TYPE OF LEAVE</th>
		<th>REMARKS</th>
	</tr>
<?php
include ("connection.php");

$result = mysqli_query($connection, "select * from leavetable");

if (mysqli_num_rows($result) >0){
	while ($rows = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>". $rows[0]. "</td>";
		echo "<td>". $rows[1]. "</td>";
		echo "<td>". $rows[2]. "</td>";
		echo "<td>". $rows[3]. "</td>";
		echo "<td>". $rows[4]. "</td>";
		echo "<td>". $rows[5]. "</td>";
		echo "</tr>";
	}
}
?>
</table>
</center>
</body>
</html>
