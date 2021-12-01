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
}else $cel=true;

$has= $_POST['password'];
$log= $_POST['login'];
$userimie= $_POST['userimie'];
$has = hash('sha256',$has);
$has = base64_encode($has);
$has = hash('sha256',$has);
$has = hash('sha256',$has);
$log = hash('sha256',$log);

$loginT= msqli_real_escape_string($conn,$log)
$hasloT= msqli_real_escape_string($conn,$has)

$sql = "SELECT * FROM loginhaslo WHERE login = '$loginT' and haslo='$hasloT'";
$result= mysql_querry($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

if($count == 1){
	session_register(".$userimie.");
$_SESSION['logowanie']=true;
$sql = "INSERT INTO loginhaslo (liczbalogowan)
VALUES (1)";
}else 
echo 'Błędne dane logowania';




?>
</body>

</html>