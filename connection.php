<?php

// Datos de acceso a la base de datos
// $host = "localhost"; con mac genera problemas 
$host = "127.0.0.1";
$database = "colores";
$port = 3307;
$user = "root";
$password = "root";


// PDO ("mysql")--> con el protocolo mysql
try {
    $conn = new PDO ("mysql:host=$host;port=$port;dbname=$database;", $user, $password );
    // echo "Conectados !!";

// Demo de la conexión exitosa
//     foreach ($conn -> query("SELECT * FROM usuarios") as $fila )
//  {
//     echo "<pre>";
//     print_r ($fila);
//     echo "</pre>";
//  }

} 
catch (PDOException $e) {
    echo $e -> getMessage();

}