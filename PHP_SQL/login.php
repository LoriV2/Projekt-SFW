<html>
<head>
<meta charset=UTF8/>
<link rel='stylesheet' href='wygląd.css'>
</head>
<body class='wrapkfc'>
  <?php
 $mail=$_POST['email'];
 $has=$_POST['haslo'];
 $login=$_POST['Login'];
 $userimie=($_POST['userimie']);
 $imie=($_POST['Imię']);
 $nazwisko=($_POST['Nazwisko']);
 $plec = ($_POST['Płeć']);

	$servername = "localhost";
	$database = "danelogowania";
	$username = "root";
	$password = "";

  $conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  };

$select = mysqli_query($conn, "SELECT `mail` FROM `loginhaslo` WHERE `mail` = '".$mail."'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
      exit('Ten email jest już zarejestrowany');
    mysqli_close($conn);
  }  

$imie = mysqli_query($conn, "SELECT `userimie` FROM `loginhaslo` WHERE `userimie` = '".$userimie."'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
      exit('Ta nazwa użytkownika jest już zajęta');
    mysqli_close($conn);
  }  

if ($plec === 'płeć'){ $plec = null; }
 
 $has = hash('sha256',$has);
 $has = base64_encode($has);
 $has = hash('sha256',$has);
 $has = hash('sha256',$has);
 $login = hash('sha256',$login);

$sql = "INSERT INTO loginhaslo (Płeć,mail,login,haslo,userimie,Imię,Nazwisko)
VALUES ('$plec','$mail','$login','$has','$userimie','$imie','$nazwisko')";

if ($conn->query($sql) === TRUE) {
  echo "Pomyślnie zostałeś zarejestrowany";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
};
mysqli_close($conn);



   header("../HTML/Weryfikacja.html");
exit(); ?>
</body>


</html>