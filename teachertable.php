<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>SPRCNHS - Table of Teachers</title>
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
		width: 98vw;
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

.updater {
	font-family: calibri;
	text-decoration: none;
	font-weight: bold;
	color: #2779de;
	font-size: 3vh;
}
</style>
<body>
<div class="topnav">
  <?php
		echo "<a href=\"dashboard.php?account=".$_GET["account"]."\">Home</a><a href=\"leavetable.php?account=".$_GET["account"]."\">View Teachers on Leave</a><a href=\"profile.php?account=".$_GET["account"]."\">Profile</a>";
	?>
</div>
<center>
	
<table>
	<tr>
		<th>FIRST NAME</th>
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
<?php echo "<center><a class=\"updater\" href=\"addtotrtable.php?account=".$_GET["account"]."\">ADD RECORDS</a></center>" ?>
</body>
<h1>You cannot access this page. Please log in.</h1>
<!--
<script type="javascript">
	function showSite() {
		const param = new URLSearchParams(window.location.search);
		const accountName = param.get('account');
		var x = document.getElementByTagName("body");
		var y = document.getElementByTagName("h1");
		if (accountName == "" || accountName == null) {
			x.style.display = "none";
			y.style.display = "block";
		} else {
			x.style.display = "block";
			y.style.display = "none";
		}
	}
</script>
-->
</html>
