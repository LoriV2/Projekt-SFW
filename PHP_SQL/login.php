<html>
<head>
<meta charset=UTF8/>
<link rel='stylesheet' href='wygląd.css'>
</head>
<body class='wrapkfc'>
  <?php
 $mail=$_POST['mail'];
 $has=$_POST['password'];
 $log=$_POST['login'];
 $userimie=($_POST['userimie']);

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

$imie = mysqli_query($conn, "SELECT `userimie` FROM `loginhaslo` WHERE `userimie` = '".$userimie."'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
    exit('Ta nazwa użytkownika jest już zajęta');
	mysqli_close($conn);
}  

 
 $has = hash('sha256',$has);
 $has = base64_encode($has);
 $has = hash('sha256',$has);
 $has = hash('sha256',$has);
 $log = hash('sha256',$log);

$sql = "INSERT INTO loginhaslo (mail,login,haslo,userimie)
VALUES ('$mail','$log','$has','$userimie')";

if ($conn->query($sql) === TRUE) {
  echo "Pomyślnie zostałeś zarejestrowany";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
};
mysqli_close($conn);



  ?>
<?php header('Refresh: 15; Location: index.html'); ?>

</body>


</html>