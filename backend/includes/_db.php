<?php
    $db = "dmcFinal"; //Está será el nombre de mi base de datos
    $usuario = "remote"; //Está será el nombre de mi usuario
    $password = "D7AC3D58A7318"; //Está será la contraseña de mi usuario
    $server = "smoothoperators.com.mx"; //Está será la URL de mi servidor

$mysqli = mysqli_connect($server, $usuario, $password, $db);
if ($mysqli -> connect_errno) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
?>