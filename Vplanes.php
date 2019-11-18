<?php
require_once 'includes/database.php';


$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['password'];
$plan=$_POST['plan'];
$fecha= strftime("%Y-%m-%d");




$insertar="INSERT INTO usuarios values ('','$nombre', '$email', '$password', '1', '0', '$plan', '2', '$fecha', '$fecha')";
mysqli_query($conectar, $insertar);




header("Location: index.php");
?>