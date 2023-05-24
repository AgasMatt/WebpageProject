<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>
<style>
	body{
		
	}
	table, th, tr{
		border-collapse: collapse;
		height: 4vh;
		width: 90vw;
		background:#00a877;
		margin: 2vh;
		color:white;
		text-align: center;
		font-family: 
	        border: none;
		border-radius: 15px 15px;
	}
   h1{
		margin-bottom: 20vh;
		background: #00A877;
	}
</style>
<body>
<center>
	<h1>SAN PEDRO RELOCATION CENTER NATIONAL HIGH SCHOOL - MAIN</h1>	
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
