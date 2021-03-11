<?php
include_once('conexion.php');
if(isset($_POST['inactivar'])){
	echo $id = (int)$_POST['id'];
	echo $estado = (int)$_POST['estado'];
	if($estado == 1){
		$estado = 0;
	}else{
		$estado = 1;
	}

	$sql = "UPDATE productos SET estado = $estado WHERE id_producto = $id";
	if(!$result = $conex->query($sql)){
		die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $conex->error . ']');
	}else{
		header("Location: pre_consultar_productos.php");
	}
}


?>
<!DOCTYPE html>
<html>
<head>
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">


<title>Pagina principal</title>

</head>
<body>

    <div id="banner">
       

    </div>
    <div id="menu">
        <?php
        include ("menu.php");
        ?>

    </div>
    <div id="general">
        
 

    <div id="cuerpo" >
	
		<div class="contenedor8">
		<?php
		//Aqui hago la consulta de la DB
		class Producto
		{
			public function consultar()
			{
			global $conex;

			echo "<table id='mitabla'class='table table-striped  table-bordered ' style='width:80%'>";
			echo "<thead class= 'text-white'>";
			echo "<th class='text-center'>Cod Categor&iacute;a</th>";
			echo "<th class='text-center'>Producto</th>";
			echo "<th class='text-center'>Categoria</th>";
			echo "<th class='text-center'>cantidad</th>";
			echo "<th class='text-center'>Estado</th>";
			echo "<th class='text-center'>Editar</th>";
			echo "</thead>";
			
			
			echo "<tbody>";
			
			
			$sql =  "SELECT * FROM productos";
			 if(!$result = $conex->query($sql)){
			  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $conex->error . ']');
			  }
			  while($row = $result->fetch_assoc())
			  { 
			  echo "<tr class='text-white'>";   
			  $iid_producto=stripslashes($row["id_producto"]);
			  $ccod_producto=stripslashes($row["cod_producto"]);
			  $pproducto=stripslashes($row["producto"]);
			  $ffk_id_categoria=stripslashes($row["fk_id_categoria"]);
			  $cantidad3=stripslashes($row["cantidad"]);
			  $estado=stripslashes($row["estado"]);
			  
			  //sUBCONSULTA CATEGORIA
				  $sqlcat =  "SELECT * FROM categorias WHERE id_categoria='$ffk_id_categoria'";
				 if(!$resultcat = $conex->query($sqlcat)){
				  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $conex->error . ']');
				  }
				  while($rowcat = $resultcat->fetch_assoc())
				  { 
				   $ccategoria=stripslashes($rowcat["categoria"]);
				  } 
				  
			  
			  
			  echo "<td >"; echo"<h4 class='font-weight-bold'>";   echo  $ccod_producto; echo"</h4>"; echo "</td>";
			  echo "<td>"; echo"<h5 class='font-italic text-uppercase font-weight-bold'>";    echo  $pproducto;  echo"</h5>"; echo "</td>";
			  echo "<td>"; echo"<h5 class='font-italic text-uppercase font-weight-bold'>";   echo  $ccategoria; echo"</h5>"; echo "</td>";
			  echo "<td>"; echo"<h4 class='font-weight-bold'>";   echo  $cantidad3; echo"</h4>"; "</td>";
			  echo "<td>";  
			 
			  echo "<form method='POST' action='pre_consultar_productos.php'>";
			  echo "<input type='hidden' name='id' value='$iid_producto'>";
			  echo "<input type='hidden' name='estado' value='$estado'>";
			  if($estado == 1):
			  echo "<input type='submit' value='Inactivar' name='inactivar' class='btn btn-teal darken-2 text-white'>";
			  elseif($estado == 0):
			  echo "<input type='submit' value='Activar' name='inactivar' class='btn btn-teal darken-2 text-white'>";
			  endif;
			  echo "</form>";
			  
			  echo "</td>";
			  
			   echo "<td>";  
			 
			  echo "<form method='POST' action='pre_editar_producto.php'>";
			  echo "<input type='hidden' name='cod_producto' value='$ccod_producto'>";
			  echo "<input type='submit' value='Editar' class='btn btn-teal darken-2 text-white'>";
			  echo "</form>";
			  
			  echo "</td>";
			  
			  echo "</tr>";   
			  }
		
			
			}
			
		}//FIn de la clase
		$nuevo=new Producto();
		$nuevo->consultar();
		
		echo "<tfoot class='grey darken-4 text-white'>";
			echo "<th class='text-center'>Cod Categor&iacute;a</th>";
			echo "<th  class='text-center'>Producto</th>";
			echo "<th  class='text-center'>Categoria</th>";
			echo "<th  class='text-center'>cantidad</th>";
			echo "<th  class='text-center'>Estado</th>";
			echo "<th  class='text-center'>Editar</th>";
			echo "</tfoot>";
			
		//Aqui hago la consulta de la DB
		?>	 
                
        </tbody>
    </table>
	

</div>
    

    <div id="col2">
        <?php
        include ("col2.php");
        ?>
    </div>
</div> 
    
    <div id="footer">
        <?php
        include ("footer.php");
        ?>
    </div>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>





<script>$(document).ready(function() {
    $('#mitabla').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
});
});
</script>

</body>

</html>