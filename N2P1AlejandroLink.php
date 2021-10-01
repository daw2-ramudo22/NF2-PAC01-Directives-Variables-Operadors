<?php
session_start();
setcookie("username","Ramu",time()+10);
$_SESSION['usuario'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 1;
?>
<html>
 <head>
  <title>Mi coche favorito</title>
 </head>
 <body>
<?php
$micoche = urlencode("Mustang");
echo "<a href='N2P1AlejandroComment.php?coche=Mustang'>";
echo "Haz click para ver mas informacion sobre Mustang"; 
echo "</a>";
?>
 </body>
</html>