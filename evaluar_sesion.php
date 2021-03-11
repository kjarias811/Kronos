<?php
class Sesion
{
	public function evaluar($documento, $contrasena)
	{
		session_start();
	include ("conexion.php");
	$contador="0";
	$sql =  "SELECT * FROM registro WHERE documento='$documento'";
  if(!$result = $conex->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $conex->error . ']');
  }
  while($row = $result->fetch_assoc())
  {    
  $ccontrasena=stripslashes($row["contrasena"]);
   if ($contrasena==$ccontrasena)
   {
   $contador=$contador+1;
   $_SESSION["usuario"]="1";
   $_SESSION["documento"]=$documento;
   header ("Location: principal_admin.php");
   }

     if ($contrasena!=$ccontrasena)
  {

 	echo "Datos incorrectos";

  }

} //Fin del While


if ($contador=="0")
{

  header ("Location: loginvista.php?error=error");
  echo "no se encuentra el registro";
}




	}

}
$nuevo=new Sesion();
$nuevo->evaluar($_POST["documento"],$_POST["contrasena"]); 


?>