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
		width: 95vw;
		background: #00A877;
		margin: 2vh;
		color: white;
		
	}
    td{
		border: 2px solid black;
	}
</style>
<body>
<center>
	
<table>
	<tr>
		<th> FIRST NAME</th>
		<th>MIDDLE NAME</th>
		<th>LAST NAME</th>
		<th>STATUS</th>
		<th>BIRTH PLACE</th>
		<th>SALARY</th>
		<th>BIRTH DATE</th>
		<th>EMP STAT</th>
		<th>TIN</th>
		<th>SG</th>
		<th>GENDER</th>
		<th>COURSE</th>
		<th>POST GRAD</th>
		<th>GRADE LEVEL</th>
		<th>AGE</th>
	</tr>
<?php
include ("connection.php");

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
?>
</table>
</center>
<a href="addtotrtable.php">VIEW</a>
</body>
</html>
