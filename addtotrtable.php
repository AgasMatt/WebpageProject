!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>SPRCNHS - Add Teachers</title>
	</head>
	<body>
		<form action="" method="post">
			<fieldset>
			<center>
				<div class="body">
					<h1>Something</h1>
					
					<label><input type="text" name="fname" placeholder="FIRST NAME" required></label>
					
					<label><input type="text" name="mname" placeholder="MIDDLE NAME" required></label>
					
					<label><input type="text" name="lname" placeholder="LAST NAME" required></label>
					
					<label><input type="text" name="status" placeholder="STATUS" required></label>
					
					<label><input type="text" name="birthplace" placeholder="BIRTH PLACE" required></label>
					
					<label><input type="text" name="salary" placeholder="SALARY" required></label>
					
					<label><input type="date" name="birthdate" id="birthdate"  placeholder="BIRTH DATE" required></label>
					
					<label><input type="text" name="empstat" placeholder="EMP STAT" required></label>
					
					<label><input type="number" name="tin" placeholder="TIN" required></label>
					
					<label><input type="text" name="sg" placeholder="SG" required></label>
					
					<label><input type="text" name="gender" placeholder="GENDER" required></label>
					
					<label><input type="text" name="course" placeholder="COURSE" required></label>
					
					<label><input type="text" name="postgrad" placeholder="POSTGRAD" required></label>
					
					<label><input type="text" name="grdlvl" placeholder="GRADE LEVEL" required></label>
					
					<label><input type="number" name="age" placeholder="AGE" required></label>
					
					<input type="submit" value="SUBMIT">
				</div>
			</center>
			<?php
				include("connection.php");
				@$fname = $_POST["fname"];
				@$mname = $_POST["mname"];
				@$lname = $_POST["lname"];
				@$stat = $_POST["status"];
				@$bplace = $_POST["birthplace"];
				@$salary = $_POST["salary"];
				@$bdate = $_POST["birthdate"];
				@$empstat = $_POST["empstat"];
				@$tin = $_POST["tin"];
				@$sg = $_POST["sg"];
				@$gender = $_POST["gender"];
				@$course = $_POST["course"];
				@$postgrad = $_POST["postgrad"];
				@$grdlvl = $_POST["grdlvl"];
				@$age = $_POST["age"];
				$query = "insert into trtable (FirstName, MiddleName, LastName, Status, BirthPlace, salary, Birthdate, Empstat, TIN, SG, Gender, Course, PostGrad, GradeLvl, Age) VALUES ('".$fname."', '".$mname."', '".$lname."', '".$stat."', '".$bplace."', ".$salary.", '".$bdate."', '".$empstat."', ".$tin.", '".$sg."', '".$gender."', '".$course."', '".$postgrad."', '".$grdlvl."', ".$age.")";
				if (mysqli_query($connection, $query)) {
					echo "Success.";
				}
			?>
			</fieldset>
		</form>
		<?php echo "<a href=\"teachertable.php?account=".$_GET["account"]."\">VIEW</a>" ?>
	</body>
</html>