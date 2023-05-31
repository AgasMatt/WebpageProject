<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Untitled</title>
	</head>
	
	<body>
		<form action="" method="post">
			<center>
				<div class="body">
					<h1>Something</h1>
					
					<label><input type="text" name="name" placeholder="NAME" required></label>
					
					<label><input type="date" name="startdate" placeholder="START DATE" required></label>
					
					<label><input type="date" name="enddate" placeholder="END DATE" required></label>
					
					<label><input type="number" name="numdays" placeholder="NO. OF DAYS" required></label>
					
					<select name="leavetype">
						<option value="Vacation Leave">Vacation Leave</option>
						<option value="Mandatory/Forced Leave">Mandatory/Forced Leave</option>
						<option value="Sick Leave">Sick Leave</option>
						<option value="Maternity Leave">Maternity Leave</option>
						<option value="Paternity Leave">Paternity Leave</option>
						<option value="Special Privilege Leave">Special Privilege Leave</option>
						<option value="Solo Parent Leave">Solo Parent Leave</option>
						<option value="Student Leave">Study Leave</option>
						<option value="10-Day VAWC Leave">10-Days VAWC Leave</option>
						<option value="Rehabilitation Leave">Rehabilitation Leave</option>
						<option value="Special Leave Benefits for Women">Special Leave Benefits for Women</option>
						<option value="Special Emergency (Calamity) Leave">Special Emergency (Calamity) Leave</option>
						<option value="Adoption Leave">Adoption Leave</option>
					</select>
					
					<input type="text" name="remarks" placeholder="REMARKS" required>
					
					<input type="submit" value="SUBMIT">
				</div>
			</center>
			<?php
			include ("connection.php");
			@$name = $_POST['name'];
			@$startdate = $_POST['startdate'];
			@$enddate = $_POST['enddate'];
			@$numdays = $_POST['numdays'];
			@$leavetype = $_POST['leavetype'];
			@$remarks = $_POST['remarks'];
			$query = "insert into leavetable (Name, StartDate, EndDate, Numdays, Leavetype, Remarks) values ('".$name."', '".$startdate."', '".$enddate."', '".$numdays."', '".$leavetype."', '".$remarks."')";
			if (mysqli_query($connection, $query)) {
				echo "Success.";
			}
			?>
		</form>
		<a href="leavetable.php">VIEW</a>
	</body>
</html>