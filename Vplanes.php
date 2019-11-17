<?php
require_once 'includes/database.php';

/*$consulp="SELECT * FROM promos";
$promos=mysqli_query($conectar, $consulp);
$fil2=mysqli_fetch_array($promos);*/

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['password'];
$plan=$_POST['plan'];
$fecha= strftime("%Y-%m-%d");
//$promo=$_POST['promo'];

//if($promo == $fil2['codigo']){

//}

$insertar="INSERT INTO usuarios values (null,'$nombre', '$email', '$password', 1, 0, '$plan', 1, '$fecha', '$fecha')";
if(mysqli_query($conectar, $insertar)){

    echo "ya inserta esta madre ahuevo compa ya la armamamos!!!!!";
}
else {
    echo "Error: " . $insertar . "<br>" . mysqli_error($conectar);
}



/*$to = $email;
$subject = "Correo de Confirmacion";
$message = 'Hola '.$nombre."\r\n"." Gracias por registrarte con nosotros "."\r\n\r\n";
$headers = 'De: Equipo de MoneySafe' . "\r\n" .
'Dudas y/o sugerencias: smoothoperators@hotmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
*/
//header("location:index.php");

?>