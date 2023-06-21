<?php

$contrasena = "HolaestoesuNejemPlo";

$hash = password_hash($contrasena, PASSWORD_DEFAULT);
echo $hash;


//VERIFICA LA CONTRASEÑA
$ingreso = "HolaestoesuNejemPlo";
if(password_verify($ingreso, $hash)){
    echo "<br>";
    echo "<br>";
    echo "CONTRASEÑA CORRECTA";
}else{
    echo "CONTRASEÑA INCORRECTA";
}



?>