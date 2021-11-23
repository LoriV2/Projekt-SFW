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


$sql = mysqli_query($conn,"SELECT (login,haslo) FROM loginhaslo WHERE 
('".$log."'=login,'".$has."'=haslo)");
if ($conn != '' ){
	echo 'sadad';
	
	
	
}else echo "niedziala";
?>
</body>

</html>