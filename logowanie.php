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

$has=($_POST['password']);
$log=($_POST['login']);
$has = hash('sha256',$has);
$has = base64_encode($has);
$has = hash('sha256',$has);
$has = hash('sha256',$has);
$log = hash('sha256',$log);

$sql = "SELECT login, haslo FROM loginhaslo WHERE login = ?";
	if($stmt=mysqli_prepare($conn,$sql)){
		mysqli_stmt_bind_param($stmt, "s", $param_login);
		$param_login = $log;
	
	if(mysqli_stmt_execute($stmt)){
		mysqli_stmt_store_result($stmt);
	
	if(mysqli_stmt_num_rows($stmt) == 1 ){
		mysqli_stmt_bind_result($stmt,$login,$haslo);
			if (mysqli_stmt_fetch($stmt)){
				if(password_verify(a))
		
		
	
?>
</body>

</html>