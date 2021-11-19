<html>
<meta charset=UTF8/>
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

$select = mysqli_query($conn, "SELECT `mail` FROM `loginhaslo` WHERE `mail` = '".$_POST['mail']."'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
    exit('Ten email jest już zarejestrowany');
	mysqli_close($conn);
}  

 $mail=$_POST['mail'];
 $has=$_POST['password'];
 $log=$_POST['login'];
 
 $has = hash('sha256',$has);
 $has = base64_encode($has);
 $has = hash('sha256',$has);
 $has = hash('sha256',$has);
 $log = hash('sha256',$log);

$sql = "INSERT INTO loginhaslo (mail,login,haslo)
VALUES ('$mail','$log','$has')";

if ($conn->query($sql) === TRUE) {
  echo "Pomyślnie zostałeś zarejestrowany";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
};


mysqli_close($conn);

  ?>
  
</body>


</html>