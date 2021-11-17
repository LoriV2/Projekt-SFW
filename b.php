<?php
	
	$Imie = $_POST['Imie'];
	$Nazwisko = $_POST['Nazwisko'];
	$taknie = $_POST['taknie'];
	$UlubionyOwoc = $_POST['UlubionyOwoc'];
	$CoJestInne = $_POST['CoJestInne'];
	

?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="tlo.css">

</head>
<body>


<div class=tlo>  

<div class=ram>

<div class=nag><a class="btn" href="index.html">Strona główna</a></div>

<div class=bar>
               <div class=bar2>Menu</div>
               <div class=bar3>

<a class="btn" href="formulaż.html">

  Formularz
</a>
<a class="btn" href="Muzyka.html">

  Muzyka
</a>
<a class="btn" href="lista.html">

  <br/>Lista
</a>

<a class="btn" href="Kalkulator.html">

   <br/>Kalkulator

</a>

<a class="btn" href="tabela.html">

   <br/>Tabela
</a>



</div>
</div>
<div class=tekst>
<?php
	echo "Odpowiedzi:";
echo "<br>";	
echo "<br>";
	echo 'Imie:'.$Imie;
echo "<br>";
echo "<br>";	
	echo 'Nazwisko:'.$Nazwisko;
echo "<br>";
echo "<br>";	
	echo 'Czy masz ukończone 18 lat:'.$taknie;
echo "<br>";
echo "<br>";
	echo 'Twój ulubiony kolor:';
if(!empty($_POST['CoWolisz'])){foreach($_POST['CoWolisz'] as $CoWolisz){
echo "<br>"."<br>".$CoWolisz."</br>";
}
};
echo "<br>";	
echo "<br>";
	echo 'Twój inny ulubiony kolor:'.$CoJestInne;
echo "<br>";
echo "<br>";
	echo 'Ulubione zwirze:'.$UlubionyOwoc;
?>
</div>
<div class=foot>Stopka</div>
</div>
</div>
</body>
</html>