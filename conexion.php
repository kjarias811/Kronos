 <?php
// conexion con la base de datos y el servido

header("Content-Type: text/html;charset=utf-8");
$conex = new mysqli("localhost","root","","proyecto_kronnos");
$acentos = $conex->query("SET NAMES 'utf8'");
//servidor, ususario, passwoerd, DB
if($conex->connect_error > 0){
    die('Unable to connect to database [' . $conex->connect_error . ']');
}
#$ conex = mysqli_connect ( "localhost" , "root" , "" , "proyecto_kronnos" );
 ?>
