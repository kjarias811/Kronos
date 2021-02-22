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

    <div class="view spider">
    <img src="https://cdn.pixabay.com/photo/2017/06/17/22/55/ufo-2413965_960_720.jpg" class="img-fluid" alt="">
    <div class="mask flex-center rgba-black-strong">
        <p class="white-text">strong overlay</p><table>
  <tr>
    <td></td>
    
	
	<td>


  <?php
  
  class Producto
  {
    public function editar($cod_producto, $producto, $fk_id_categoria,$cantida3)
      {
  include ("conexion.php");
  $contador="0";
 
  
mysqli_query($conex,"UPDATE productos SET producto = '$producto' WHERE cod_producto = '$cod_producto'") or die(mysqli_error($conex));
mysqli_query($conex,"UPDATE productos SET fk_id_categoria = '$fk_id_categoria' WHERE cod_producto = '$cod_producto'") or die(mysqli_error($conex));
mysqli_query($conex,"UPDATE productos SET cantidad = '$cantida3' WHERE cod_producto = '$cod_producto'") or die(mysqli_error($conex));




   echo "<img src='vistobueno.png' width='50' height='50' />"; echo "</br>";
  echo "El producto se modific&oacute; correctamente";
  
  /*if ($contador!="0")
  {
    echo "<img src='vistomalo.png' width='50' height='50' />"; echo "</br>";
    echo "iEste producto ya existe!"; 
    
  }*/
    }


  }

$nuevo=new Producto();
$nuevo->editar($_POST["cod_producto"],$_POST["producto"],$_POST["fk_id_categoria"],$_POST["cantidad"]);

  ?> 


	</td>
    
	
	<td>
  </tr>
</table>

    </div>


</div>


</div>
    

    <div id="col2">z
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