<?php

// Llamar a la conexión una vez
require_once 'connection.php';



//1. Definir la sentencia (query)
// PARA EVITAR LA INYECCION DE CODIGO (?,?,?)
$delete = "delete FROM colores WHERE id_color = ?;";

// 2. Preparación
// conn es un objeto de tipo PDO ( si pones encima el cursor te lo indica)
$delete_pre = $conn->prepare($delete);

// 3. Ejecución
$delete_pre -> execute([$_GET['id']]);

$delete_pre= null ;
$conn=null;

// Volver a casa -> index.php
header('location: index.php');