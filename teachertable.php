<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>SPRCNHS - Table of Teachers</title>
</head>
<style>
	body{
		
		
			}
	table, th, tr{
		border-collapse: collapse;
		height: 4vh;
		width: 90vw;
		background: #00A877;
		margin: 2vh;
		color: white;
		text-align: center;
		font-family:calibri;
		border: none;
		border-radius: 15px 15px;
		font-size: 2vh;
		
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
<?php echo "<a href=\"addtotrtable.php?account=".$_GET["account"]."\">VIEW</a>" ?>
</body>
</html>
