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
$userimie= '';

$has = hash('sha256',$has);
$has = base64_encode($has);
$has = hash('sha256',$has);
$has = hash('sha256',$has);
$log = hash('sha256',$log);

if(!empty($log) && !empty($password) && !is_numeric($log))
{

	//czyta z bazy danych
	$uzytkownik = mysqli_query("SELECT userimie FROM `loginhaslo` WHERE login='$log'");

	if (!$uzytkownik) {
		echo 'Could not run query: ' . mysql_error();
		exit;
	}
	$row = mysql_fetch_row($uzytkownik);
	
	$row[1] = $userimie;

	$pytanie = "SELECT * FROM `loginhaslo` WHERE login = '$log' limit 1";

	$popytaniu = mysqli_query($conn, $pytanie);

	if($pytanie)
	{
		if($pytanie && mysqli_num_rows($pytanie) > 0)
		{
			$dane = mysqli_fetch_assoc($pytanie);
			if($dane['haslo'] === $has)
			{


				$_SESSION['NAZWAUZ'] = $dane['userimie'];
				header("Location: index.html")
				die;
			}
		} 
	
	}

	

}






exit();
?>
</body>

</html>