<html>

<body>

	<?php
	session_start();
	$servername = "localhost";
	$database = "danelogowania";
	$username = "root";
	$password = "";

	$has = $_POST['haslo'];
	$login = $_POST['Login'];

	$has = hash('sha256', $has);
	$has = base64_encode($has);
	$has = hash('sha256', $has);
	$has = hash('sha256', $has);
	$login = hash('sha256', $login);

	$conn = mysqli_connect($servername,  $username, $password, $database);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM `loginhaslo` WHERE `Login` = '$login' AND `haslo` = '$has'";
	
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	$count = mysqli_num_rows($result);
	echo $count;
	if ($count == 1) {
		echo "<h1><center> Login successful </center></h1>";
	} else {
		echo "<h1> Login failed. Invalid username or password.</h1>";
	}
?>
</body>

</html>