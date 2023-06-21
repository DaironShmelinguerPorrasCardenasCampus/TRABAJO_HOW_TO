<?php

session_start();

$_SESSION['usuario'] = "Dairon";
$_SESSION['password'] = "Dairon123456789";

echo "el usuario es: ". $_SESSION['usuario'];
echo "<br>";
echo "la contraseña es: ". $_SESSION['password'];
echo "<br>";

?>