<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>SPRCNHS - Main</title>
	</head>
	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
		}
		
		.container{
			margin: auto;
			background-color: #555;
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
			height: 5vh;
			margin-bottom: 2vh;
			margin-left: 5vw;
			background: whitesmoke;
		}
		
		.btn2{
			width: 15vw;
			height: 5vh;
			margin-bottom: 2vh;
			margin-left: 5vw;
			background: whitesmoke;
		}
		
		.btn3{
			width: 15vw;
			height: 5vh;
			margin-bottom: 2vh;
			margin-left: 5vw;
			background: whitesmoke;
		}
		
		.btn4{
			width: 15vw;
			height: 5vh;
			margin-bottom: 2vh;
			margin-left: 5vw;
			background: whitesmoke;
		}
	</style>
	<body>
		<div class="container">
			<div class="topnav">
				<h1>DASHBOARD</h1>
				
				<div id="myLinks">
					<?php
						if (isset($_GET["account"])) {
							echo "<a href=\"teachertable.php?account=".$_GET["account"]."\"><button class=\"btn\">VIEW TEACHERS</button></a><a href=\"leavetable.php?account=".$_GET["account"]."\"><button class=\"btn2\">VIEW TEACHERS ON LEAVE</button> <br></a><a href=\"profile.php?account=".$_GET["account"]."\"><button class=\"btn3\">PROFILE</button></a>";
							echo "<a href=\"guidelines.php?account=".$_GET["account"]."\"><button class=\"btn\">GUIDELINES</button><br></a>";
						}
						else {
							echo "<button class=\"btn\">You must be logged in to access these!</button>";
							echo "<a href=\"guidelines.php\"><button class=\"btn\">GUIDELINES</button><br></a>";
						}
						if (isset($_GET["account"])) {
							echo "<a href=\"logout.php?account=".$_GET["account"]."\"><button class=\"btn\">LOG OUT</button></a>";
						} else {
							echo "<a href=\"login.php\"><button class=\"btn\">LOG IN</button></a>";
							echo "<a href=\"signup.php\"><button class=\"btn\">SIGN UP</button></a>";
						}
					?>
				</div>
			<span class="icon" onclick="showLinks()">
				<i class="fa fa-bars"></i>&#9776;
			</span>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		function showLinks(){
			var x = document.getElementById("myLinks");
			if (x.style.display === "block"){
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
		}
	</script>
</html>
