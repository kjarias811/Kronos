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
<title>Pagina principal</title>

</head>
<body>
<div id="menu">
        <?php
        include ("menu.php");
        ?>

    </div>
    <div id="banner">


    </div>
    

    </div>
    <div id="general">

    <div id="col1">
    |   
    </div>

    <div id="cuerpo" >
    <p>
  <?php
  class Producto
  {
    public function registrar($cod_producto, $producto, $fk_id_categoria,$cantidad2)
      {
  include ("conexion.php");
  $contador="0";
  //consultar primero si la categoria ya existe
    $sql =  "SELECT * FROM productos WHERE cod_producto='$cod_producto'";
  if(!$result = $conex->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $conex->error . ']');
  }
  while($row = $result->fetch_assoc())
  {                  
  $ccod_producto=stripslashes($row["cod_producto"]);
  $contador=$contador+1;
  }
  //consultar primero si la categoria ya existe
 
  if ($contador=="0")
  {
  mysqli_query($conex,"INSERT INTO productos (id_producto,cod_producto, producto, fk_id_categoria, cantidad) 
  VALUES (NULL, '$cod_producto','$producto','$fk_id_categoria','$cantidad2')") or die(mysqli_error($conex));
  echo "<h1><i class='fas fa-check-circle text-success'>¡El producto se a creado correctamente!</i><i class='fas fa-check-circle text-success'></i></h1>";
  echo "<img src='imagenes/img12.png' style='width: 300px;'>";
}
  if ($contador!="0")
  {
    echo  "<h1><i class='fas fa-exclamation-triangle text-danger'>¡Este producto ya existe!</i><i class='fas fa-exclamation-triangle text-danger'></i></h1>"; 
    echo "<img src='imagenes/img13.png' style='width: 300px;'>";

  }
    }
    

  }

$nuevo=new Producto();
$nuevo->registrar(@$_POST["cod_producto"],@$_POST["producto"],@$_POST["fk_id_categoria"],@$_POST["cantidad"]);

  ?> 
  
  </p>
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

</body>

</html>