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
function filtruj($zmienna)
    {
        if($cel=true)
            $zmienna = stripslashes($zmienna); 
         return mysqli_real_escape_string(htmlspecialchars(trim($zmienna),$zmienna));
    }
	
$has=filtruj($_POST['password']);
$log=filtruj($_POST['login']);
$has = hash('sha256',$has);
$has = base64_encode($has);
$has = hash('sha256',$has);
$has = hash('sha256',$has);
$log = hash('sha256',$log);

$result = mysqli_query($conn,"SELECT login, haslo FROM uzytkownicy WHERE login = '".$log."' AND haslo = '".($has)."';");
 if (mysqli_num_rows($result) > 0){
	 $_SESSION['zalogowano']= true;
	 $_SESSION['login']=$login;
	 header('Location: index.html');
	 
 }else echo 'nie';
?>
</body>

</html>