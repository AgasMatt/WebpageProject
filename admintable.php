<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>SPRCNHS - Site Accounts</title>
</head>
<style>
	table, th, tr, td{
		border-collapse: collapse;
		height: 4vh;
		width: 90vw;
		
		margin: 2vh;
		color: white;
		text-align: center;
		font-family:calibri;
		border: none;
		border-radius: 15px 15px;
	}
    th{
		background: #00A877;
	}
	td{
		background: #00A877;
	}
	h1{
		margin-bottom: 20vh;
	
		background: #00A877;
	}
</style>
<body>
<center>
<h1></h1>	
<table>
	<tr>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
		<th>SECURITY Q</th>
		<th>ANSWER</th>
	</tr>
<?php
include ("connection.php");
$result = mysqli_query($connection, "select * from admintble");

if (mysqli_num_rows($result)>0){
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
