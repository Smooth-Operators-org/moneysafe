<?php 
  
session_start();
error_reporting(0);
$varsesion=$_SESSION['usuarios'];
if (isset($varsesion)) {

require '../../includes/db.php';
?><!DOCTYPE html>
<html>
<head>
	<title>Sistema de aparatado de cañones</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="img/bootstrap-solid.svg" width="30" height="30" alt="">
  <!-- Navbar content -->
  <a class="navbar-brand" href="#">CAÑONES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">STATUS</th>
  </thead>
  <tbody>
      <?php 
  //cuando se consulta varios registros se utiliza select "*" todos los datos de la tabla y si quiero solo los datos especificos ["id","nombre"]
  $usuarios = $db->select("aplicaciones","*");
  //  $usuarios = $db->select("usuarios","*",["status" => 1]);
  //  $usuarios = $db->select("usuarios","*",["AND" =>["status" => 1, "nivel" => 2]]);
  // 1 es activo

  // solo para un solo uno es get
  //ejemplo $row =$db->get("usuarios","*",["id" => 6]);
  //hay que quitar el foreach

  //print_r($usuarios);
  foreach ($usuarios as $usuario => $row) {
   ?>
   <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['nombre']; ?></td>
      <td><?php echo $row['status']; ?></td>
  </tr>
          <?php 
        }

       ?>
  </tbody>
</table>
<div>

</div>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../../modulos/usuarios/index.php">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SOLICITUD DE CAÑON</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ACCIONES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">APARTADOS</a>
          <a class="dropdown-item" href="#">DISPONIBLES</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
                  <li class="nav-item active">
        <a class="nav-link" href="../../cerrar_session.php">cerrar session<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
<?php 
}else{
header("location:../../login.php");
}

 ?>