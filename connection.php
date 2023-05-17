<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "trdb";
$connection = @new mysqli($server, $username, $password, $database);

if ($connection -> connect_error){
	die("Failed to connect:". $connection -> connect_error);
}

else{
	echo("");
}
?>

</body>
</html>
