<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>SPRCNHS - Table of Teachers on Leave</title>
</head>
<style>
	body{
		background-repeat: no-repeat;
		background-size: cover;
		background-image: url(img/bg.webp);
			}
	table, th, tr{
		border-collapse: collapse;
		height: 4vh;
		width: 90vw;
		background: #00A877;
		margin-left: 2vh;
		margin-top: 20vh;
		color: white;
		text-align: center;
		font-family:calibri;
		border: none;
		border-radius: 15px 15px;
		font-size: 2vh;
      
	}
  
	h1{
		top: 1vh;
	
		background: #00A877;
	}

.topnav {
  background-color: #333;
  overflow: hidden;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
		top: 0px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}


</style>
<body>
<div class="topnav">
  <a href="#home">View teachers table</a>
  <a href="#news">View</a>
  <a href="#contact">Profile</a>
 
</div>
	
<center>

<table>
	<tr>
		<th>NAME</th>
		<th>START DATE</th>
		<th>END DATE</th>
		<th>NO. OF DAYS</th>
		<th>TYPE OF LEAVE</th>
		<th>REMARKS</th>
		<th>EDIT</th>
	</tr>
<?php
include ("connection.php");
if (isset ($GET ['name'])){
	$id = $_GET['name'];
	$delete = mysqli_query($connection, "DELETE FROM leavetable where name = '$name");
}
$result = mysqli_query($connection, "select * from leavetable");

if (mysqli_num_rows($result) >0){
	while ($rows = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>". $rows[1]. "</td>";
		echo "<td>". $rows[2]. "</td>";
		echo "<td>". $rows[3]. "</td>";
		echo "<td>". $rows[4]. "</td>";
		echo "<td>". $rows[5]. "</td>";
		echo "<td>". $rows[6]. "</td>";
		echo "<td> <button class ='btn'><a href='leavetable.php?id=".$rows[0]."'>DELETE</a></button></td>";
		echo "</tr>";
	}
}
?>
</table>
</center>
<?php echo "<a href=\"addtoleave.php?account=".$_GET["account"]."\">VIEW</a>" ?>
</body>
</html>
