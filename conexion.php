<?php
//Nueva conexión de la clase mysql
//Parámetros: ubicación del servidor, nombre de usuario, contraseña, base de datos
$mysqli = new mysqli("localhost", "root", "", "hospital");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySql: (", $mysqli->connect_errno, ")", $mysqli->connect_errno;
}
// else{
//         echo "Todo bien, amigo";
//     }
// ?>