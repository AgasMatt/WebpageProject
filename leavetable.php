<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Leave Table</title>
</head>
<style>
	body{
		background-repeat: no-repeat;
		background-size: cover;
		
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
	img{
		width: 229px;
		height: 216px;
	}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 60px;
}

li a {
  display: block;
}
.active {
  background-color: #04AA6D;
  color: white;
}
</style>
<body>
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
	
<center>
<img src="img/LOGO.png">
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
		echo "<td> <button class ='btn'><a href='leavetable.php? id=".$rows[0]."'>DELETE</a></button></td>";
		echo "</tr>";
	}
}
?>
</table>
</center>
<?php echo "<a href=\"addtoleave.php?account=".$_GET["account"]."\">VIEW</a>" ?>
</body>
</html>
