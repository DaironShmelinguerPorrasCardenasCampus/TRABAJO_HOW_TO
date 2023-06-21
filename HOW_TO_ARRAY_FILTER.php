<?php

$estudiantes = array(
array(
    "nombre" => "Dairon",
    "apellido" => "Shmelinguer",
    "edad" => 22
),
array(
    "nombre" => "Angela",
    "apellido" => "Gomez",
    "edad" => 21
),
array(
    "nombre" => "Ana",
    "apellido" => "Cardenas",
    "edad" => 42
),
array(
    "nombre" => "Daniela",
    "apellido" => "Cardenas",
    "edad" => 18
)
);

$estud_menores = array_filter($estudiantes, function
($estudiante){
    return $estudiantes["nombre"] == "Dairon";
});

print_r($estud_menores);



?>