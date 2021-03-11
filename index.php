<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <title>Ingreso</title> 
    <link rel="icon" type="img/png" href="imagenes/Logo.png">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
 <link rel="stylesheet" type="text/css" href="estilos.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
</head>  
<body>
    <img id="logo" src="imagenes/Logo.png" style="width: 100px; float:left; margin-top:-80px;">   
    <h1 id="titulo1">Welcome to Kronnos</h1>
    
    <form class="formulario" id="form1" name="form1" method="POST" action="evaluar_sesion.php">
        
        <h1 id="login1">INGRESO</h1>
        <div class="contenedor">

                <div class="input-contenedor">
                    <div id="cc">
                        <i class="glyphicon glyphicon-credit-card"style="color:gray"></i>
                        &nbsp;&nbsp;&nbsp;
                        <input type="text" placeholder="Cedula" name="documento" required="">
                    </div>
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="contrasena" required="">
                </div>
                
          <input type="submit" value="Inicio" class="button">
            <p>¿No tienes una cuenta? <a class="link" href="registrarvista.php">Registrate </a></p>
        </div>
        
 
        </form>
</body>
</html>