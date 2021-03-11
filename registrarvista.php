<?php


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <title>Registro</title> 
    <link rel="stylesheet" type="text/css" href="estilos.css" />
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="img/png" href="imagenes/Logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">

</head>  
<body>
    
    <div id="logo2"><img id="logo2" src="imagenes/Logo.png" style="width: 100px;"></div>

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
                <i class="glyphicon glyphicon-credit-card"style="color:gray"></i>
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
</body>
</html>