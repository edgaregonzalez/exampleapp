<?php


function Connect()
{
 $dbhost = "";
 $dbuser = "";
 $dbpass = "";
 $dbname = "";

 // Crear una conexion
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}

?>
