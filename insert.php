<?php

// Llamar a la conexión una vez
require_once 'connection.php';
require_once 'traduccion_colores.php';
// $_POST

    // echo "<pre>";
    // print_r ($_POST);
    // echo "</pre>";

$usuario = $_POST ['usuario'];
//Para convertir el color a 
$color_es = strtolower($_POST ['color']);

$encontrado = false;
foreach ($array_colores_es_en as $clave => $valor) {
    if ($clave == $color_es) {
        $encontrado = true;
        break;
    }
}
if (!$encontrado) {
    $color_es = "blanco";
}

//1. Definir la sentencia (query)
// PARA EVITAR LA INYECCION DE CODIGO (?,?,?)
$insert = "INSERT INTO colores(usuario, color_es,color_en) 
VALUES (?, ?, ?);";

// 2. Preparación
// conn es un objeto de tipo PDO ( si pones encima el cursor te lo indica)
$insert_pre = $conn->prepare($insert);

// 3. Ejecución
$insert_pre -> execute([$usuario,$color_es, $array_colores_es_en[$color_es]]);

$insert_pre= null ;
$conn=null;
// Volver a casa -> index.php
header('location: index.php');