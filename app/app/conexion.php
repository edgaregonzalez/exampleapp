<?php


function Connect()
{
 $dbhost = "db";
 $dbuser = "root";
 $dbpass = "superpassword";
 $dbname = "mensajesdb";

 // Crear una conexion
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}

?>
