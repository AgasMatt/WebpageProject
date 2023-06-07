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
<title>SPRCNHS - Main</title>
<body>

<div class="container">
	<div class="topnav">
		<h1>DASHBOARD</h1>
		
		<div id="myLinks">
			<?php
				if (isset($_GET["account"])) {
					echo "<a href=\"teachertable.php?account=".$_GET["account"]."\"><button class=\"btn\">VIEW TEACHERS</button> <br></a><a href=\"leavetable.php?account=".$_GET["account"]."\"><button class=\"btn2\">VIEW TEACHERS ON LEAVE</button> <br></a><a href=\"profile.php?account=".$_GET["account"]."\"><button class=\"btn3\">PROFILE</button> <br></a>";
				}
				else {
					echo "You must be logged in to access these!";
				}
				if (isset($_GET["account"])) {
					echo "<a href=\"logout.php?account=".$_GET["account"]."\">Log Out</a>";
				} else {
					echo "<a href=\"login.php\">Log In</a>";
					echo "<a href=\"signup.php\">Sign Up</a>";
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
