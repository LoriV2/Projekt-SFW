<html>
<head>
<meta charset=UTF8/>
<link rel='stylesheet' href='../wyglad.css'>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Strona Główna</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <script src="scrypt.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class='boidy'>
 <div class = 'modal-dialog'>
    <div class = 'modal-content'>
            <?php
                $mail=$_POST['email'];
                $has=$_POST['haslo'];
                $login=$_POST['login'];
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
if (empty($imie)){
  die("Connection failed: " . $conn->connect_error);

}
          $select = mysqli_query($conn, "SELECT `mail` FROM `loginhaslo` WHERE `mail` = '".$mail."'") or exit(mysqli_error($conn));
          if(mysqli_num_rows($select)) {
                exit('Ten email jest już zarejestrowany');
              mysqli_close($conn);
            }  
          
          $has = hash('sha256',$has);
          $has = base64_encode($has);
          $has = hash('sha256',$has);
          $has = hash('sha256',$has);
          $login = hash('sha256',$login);


          $sql = "INSERT INTO loginhaslo (Płeć,mail,login,haslo,userimie,Imię,Nazwisko) VALUES ('$plec','$mail','$login','$has','$userimie','$imie','$nazwisko')";
          if($conn->query($sql) === true)
          {
              echo "Pomyślnie zarejestrowano.";
              echo '<br>';
              echo '<br>';
              mysqli_close($conn);
          }  
              
            exit(); 
            ?>
            </div>
            <div class="modal-footer">
      <div class="col-xs-4 col-sm-4 col-md-4">
      <a class="btn btn-primary" href="../HTML/index.html" role="button">Wróć na stronę główną</a>
                    </div>  
        </div>
    
  </div>
</body>
</html>