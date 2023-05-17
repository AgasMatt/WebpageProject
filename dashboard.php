<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>
<style>
	body{
		font-family: Arial, Helvetica, sans-serif;
	}
	
	.conatiner{
		margin: auto;
		bacground-color: #555;
		height: auto;
		color: white;
		border-radius: 1vh;
	}
	
	.topnav{
		border-radius: 1vh;
		overflow: hidden;
		background-color: #333;
		position: relative;
	}
	
	.topnav #myLinks{
		display: none;
	}
	
	.topnav span.icon{
		color: white;
		height: 5vh;
		background: black;
		display: block;
		position: absolute;
		right: 1;
		top: 1;
	}
	
	h1{
		background-color: #04AA6D;
		height: 8vh;
		color: black;
		margin-top: auto;
		border-radius: 1vh;
	}
	
	.btn{
		width: 15vw;
		height: 10vh;
		margin-bottom: 2vh;
		margin-left: 5vw;
		background: whitesmoke;
	}
	
	.btn2{
		width: 15vw;
		height: 5vh;
		margin-bottom: 2vh;
	}
	
	.btn3{
		width: 15vw;
		height: 5vh;
		margin-bottom: 2vh;
	}
	
	.btn4{
		width: 15vw;
		height: 5vh;
		margin-bottom: 2vh;
	}
</style>
<body>

<div class="container">
	<div class="topnav">
		<h1>DASHBOARD</h1>
		
		<div id="myLinks">
			<a href="viewrecord.php">
				<button class="btn">VIEW RECORD</button> <br>
			</a>
			
			<a href="viewrecord.php">
				<button class="btn2">VIEW RECORD</button> <br>
			</a>
			
			<a href="viewrecord.php">
				<button class="btn3">VIEW RECORD</button> <br>
			</a>
			
			<a href="viewrecord.php">
				<button class="btn4">VIEW RECORD</button>
			</a>
		</div>
	<span  href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>&#9776;
	</span>
	</div>
</div>
<script>
function myFunction(){
	var x = document.getElementById("myLinks");
	if (x.style.display === "block"){
		x.style.display = "none";
	} else {
		x.style.display = "block";
	}
}
</script>


<?php

?>

</body>
</html>
