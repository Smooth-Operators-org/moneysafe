<?php 
require_once("_db.php");
switch ($_POST["accion"]) {
	case 'login':
	login();
	break;
	
	//Productos
	case 'consultar_usuarios':
	consultar_usuarios();
	break;
	case 'insertar_usuarios':
	insertar_usuarios();
	break;
	case 'editar_usuarios':
		editar_usuarios($_POST["id"]);
	break;
	case 'editar_registro':
		editar_registro($_POST["id"]);
	break;
	case 'eliminar_registro':
		eliminar_usuarios($_POST["id"]);
	break;


	case 'consultar_planes':
		consultar_planes();
		break;
		case 'insertar_planes':
		insertar_planes();
		break;
		case 'editar_planes':
			editar_planes($_POST["id"]);
		break;
		case 'editar_plan':
			editar_plan($_POST["id"]);
		break;
		case 'eliminar_planes':
			eliminar_planes($_POST["id"]);
		break;



	default:
	break;
}
//PRODUCTOS

function consultar_usuarios(){
	global $mysqli;
	$consulta = "SELECT * FROM app";
	$resultado = mysqli_query($mysqli, $consulta);
	$arreglo = [];
	while($fila = mysqli_fetch_array($resultado)){
		array_push($arreglo, $fila);
	}
	echo json_encode($arreglo); 
}


function editar_usuarios($id){
	global $mysqli;
	$nombre = $_POST["nombre"];
	$descripcion = $_POST["descripcion"];	
	
	$consulta = "UPDATE app SET nombre_app = '$nombre', desc_app= '$descripcion' WHERE id_app = $id";
	$resultado = mysqli_query($mysqli, $consulta);
    echo "Se edito el usuario correctamente";

}
function editar_registro($id){
    global $mysqli;
    $consulta = "SELECT * FROM app WHERE id_app = '$id'";
    $resultado = mysqli_query($mysqli,$consulta);
    
    $fila = mysqli_fetch_array($resultado);
    echo json_encode($fila);
  }

function eliminar_usuarios($id){
	global $mysqli;
	$consulta = "DELETE FROM app WHERE id_app =$id";
	$resultado = mysqli_query($mysqli, $consulta);
	if ($resultado) {
		echo "Se elmino correctamente";
		# code...
	}else{
		echo "Se genero un error intenta nuevamente";
	}
}

function insertar_usuarios(){
	global $mysqli;

	$nombre_ap= $_POST["nombre"];
	$descripcion_ap = $_POST["descripcion"];
	
	echo $nombre_ap;
	echo $descripcion_ap;


	$consul1 = "INSERT INTO app VALUES(null,'$nombre_ap','$descripcion_ap')";
	$resul1 = mysqli_query($mysqli, $consul1);
		echo "Se inserto el usuario en la BD ";
		
}

//PLANES


function consultar_planes(){
	global $mysqli;
	$consulta = "SELECT p1.id_plan, p1.nombre_plan, p1.desc_plan, p1.costo_plan, p2.nombre_app FROM planes p1 INNER JOIN app p2 on p1.id_app=  p2.id_app";
	$resultado = mysqli_query($mysqli, $consulta);
	$arreglo = [];
	while($fila = mysqli_fetch_array($resultado)){
		array_push($arreglo, $fila);
	}
	echo json_encode($arreglo); 
}


function editar_planes($id){
	global $mysqli;
	$nombre = $_POST["nombre"];
	$descripcion = $_POST["descripcion"];
	$costo = $_POST["costo"];
	$app=$_POST["app"];
	
	$consulta = "UPDATE planes SET nombre_plan = '$nombre', desc_plan = '$descripcion', costo_plan ='$costo', id_app='$app'  WHERE id_plan = $id";
	$resultado = mysqli_query($mysqli, $consulta);
    echo "Se edito el usuario correctamente";

}
function editar_plan($id){
    global $mysqli;
    $consulta = "SELECT * FROM planes WHERE id_plan = '$id'";
    $resultado = mysqli_query($mysqli,$consulta);
    
    $fila = mysqli_fetch_array($resultado);
    echo json_encode($fila);
  }

function eliminar_planes($id){
	global $mysqli;
	$consulta = "DELETE FROM planes WHERE id_plan =$id";
	$resultado = mysqli_query($mysqli, $consulta);
	if ($resultado) {
		echo "Se elmino correctamente";
		# code...
	}else{
		echo "Se genero un error intenta nuevamente";
	}
}

function insertar_planes(){
	global $mysqli;

	$nombre_ap= $_POST["nombre"];
	$descripcion_ap = $_POST["descripcion"];
	$costo_ap = $_POST["costo"];
	$app =$_POST["app"];	


	$consul1 = "INSERT INTO planes VALUES(null,'$nombre_ap','$descripcion_ap', $costo_ap, $app)";
	$resul1 = mysqli_query($mysqli, $consul1);
		echo "Se inserto el usuario en la BD ";
		
}
//login


function login(){
	global $mysqli;

		$correo = $_POST["correo"];
		$pass = $_POST["password"];	

		$consulta = "SELECT * FROM usuarios WHERE email_usr = '$correo'";
		$resultado = $mysqli->query($consulta);
		$fila = $resultado->fetch_assoc();
		echo $fila;
		if ($fila == 0) 
			{

				echo "[2]";

			}


		else if ($fila["password_usr"] != $pass) 
			{
				$consulta = "SELECT * FROM usuarios WHERE email_usr = '$correo' AND password_usr = '$pass'";
				$resultado = $mysqli->query($consulta);
				$fila = $resultado->fetch_assoc();

				echo "[0]";

				
			}
				else if($correo == $fila["email_usr"] && $pass == $fila["password_usr"])
				{

					echo "[1]"	;
					session_start();
					error_reporting(0);

					$_SESSION['usuarios']=$correo;
					echo $correo;
					echo $_SESSION['usuarios'];

					

  					
					
				}
			}

?>