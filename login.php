<html>
<body>
  <?php
 $has=$_POST['password'];
 $log=$_POST['login'];
  
 $has = hash('sha256',$has);
  $log = hash('sha256',$log);
 $has = base64_encode($has);
 $has = hash('sha256',$has);
 $has = hash('sha256',$has);
 echo $has;
 echo "<br>";
 echo $log;
  
  
  ?>
</body>


</html>