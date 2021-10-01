<?php
$nombre_usuario = $_GET['usuario'] ?? 'nadie';
?>
<?php
session_start();

if ($_SESSION['authuser'] != 1){
    echo 'Lo siento pero no tienes permisos para esta pagina';
    exit();     
}

?>
<html>
 <head>
  <title>Mi coche favorito <?php echo $_GET['coche'];?></title>
 </head>
 <body>
<?php
echo "Welcome to our site, ";
echo $_COOKIE["username"];
echo $_SESSION["usuario"];
echo "! <br/>";

echo "Mi coche favorito es: ";
echo $_GET['coche'];
echo "<br>";
echo "Mi puntuacion sobre este coche es: ";
echo rand(1, 10);
?>
<p>Date: </p>
<?php
date_default_timezone_set('America/New_York');
$month = date('n');
if ($month ==  1) { echo '31'; }
if ($month ==  2) { echo '28 (unless it\'s a leap year)'; }
if ($month ==  3) { echo '31'; }
if ($month ==  4) { echo '30'; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo '31'; }
if ($month ==  8) { echo '31'; }
if ($month ==  9) { echo '30'; }
if ($month == 10) { echo '31'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }
?>
 </body>
</html>

