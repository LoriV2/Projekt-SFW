<html>
<body>

<?php
	$servername = "localhost";
	$database = "danelogowania";
	$username = "root";
	$password = "";

  $conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
};
$has=$_POST['password'];
$log=$_POST['login'];
$has = hash('sha256',$has);
$has = base64_encode($has);
$has = hash('sha256',$has);
$has = hash('sha256',$has);
$log = hash('sha256',$log);


$select = mysqli_query($conn, "SELECT * FROM `loginhaslo` WHERE `login` = '".$log."' AND `haslo` = '".$has."'  ") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
    $SESSION=
	mysqli_close($conn);
}

?>
</body>

</html>