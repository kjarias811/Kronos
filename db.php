<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos.css" />
<link rel="icon" type="img/png" href="imagenes/Logo.png">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<title>Pagina principal</title>

</head>
<body>
<?php
include ("conexion.php");
$correcto=0;
$consulta=0;

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1  && strlen($_POST['apellido']) >= 1 &&  strlen($_POST['cedula']) >= 1 && strlen($_POST['contrasena']) >= 1 &&  strlen($_POST['contrasena1']) >= 1 && strlen($_POST['correo']) >= 1) {
		$name = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
        $CC = trim($_POST['cedula']);
		$pass = trim($_POST['contrasena']);
		$pass1 = trim($_POST['contrasena1']);
		$email = trim($_POST['correo']);
		
		if($pass==$pass1){

			$correcto=1;
		} 
		if($correcto==0){
			echo "<h4 id='titulo5'><i class='fas fa-minus-circle text-white  red accent-4'>¡La contraseña no coinciden por favor ingresela de nuevo!</i><i class='fas fa-minus-circle text-white red accent-4'></i></h4>";
		}
		if($correcto==1){
		$consulta = "INSERT INTO registro(id, nombre,apellido, documento, contrasena, correo) VALUES (null,'$name','$apellido','$CC','$pass','$email')";
		echo "<h4 id='titulo5'><i class='fas fa-check-circle text-success'>¡Te haz inscrito correctamente!</i><i class='fas fa-check-circle text-success'></i></h4>";
	}
		$resultado = mysqli_query($conex,$consulta);
		
	}
}
?>
<div id="logo5"><img src="imagenes/Logo.png" style="width: 100px;"></div>

<form name="addform" action="db.php" class="formulario" method="POST">
    
<h1 id="login1">Registrate</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="nombres" name="nombre" required="">
         </div>
         <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="apellidos" name="apellido" required="">
         </div>

         <div class="input-contenedor">
            <div id="cc">
			<i class="far fa-address-card" style="color:gray"></i>
                &nbsp;&nbsp;&nbsp;
                <input type="text" placeholder="Cedula" name="cedula" required="">
            </div> 
         </div>
         
        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña"name="contrasena" required="">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Confirmar contraseña" name="contrasena1" required="">
        </div>

        <div class="input-contenedor">
            <div id=correo>
                <i class="fa fa-envelope" style="color: grey;"></i>
                &nbsp;&nbsp;&nbsp;
                <input type="text" placeholder="Correo" name="correo" required="">
            </div>
        </div>
         
        <input type="submit" name="register" value="Registrate" class="button" style="vertical-align:middle">
<p>¿Ya tienes una cuenta?<a class="link" href="loginvista.php">Iniciar Sesion</a></p>
    </div>
</form>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>


