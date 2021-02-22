<!DOCTYPE html>
<html>
<head>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="estilos.css" />
<link rel="icon" type="img/png" href="imagenes/Logo.png">

</head>
<body>


    </div>
    <div id="menu">
        <?php
        include ("menu.php");
        ?>

    </div>

    <div id="general">

  

  <div id="cuerpo">


<div class="cuerpo3">
 
<h1 id="titulo3">Crear producto &nbsp;<i class="fas far fa-folder-open pl-1"></i></h1>

 <form id="form1" method="post" name="form1" action="neg_dat_crear_producto.php">
 <input id="producto1" type="text" name="cod_producto" id="cod_producto" autocomplete="off" placeholder="Codigo del producto" required=""><br><br>
 <input  id="producto2" type="text" name="producto" id="producto" autocomplete="off" placeholder="Nombre de producto" required=""><br>
 <input  id="cantidad2" type="text" name="cantidad" id="cantidad" autocomplete="off" placeholder="Ingrese cantidad del producto" required=""><br>
 <select class="" id="op" name="fk_id_categoria" id="fk_id_categoria" required="required">
 <option value="">Seleccione categoria:</option>

<?php
//Aqui va la consulta de las categorias
include ("conexion.php");
$sql =  "SELECT * FROM categorias";
  if(!$result = $conex->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $conex->error . ']');
  }
  while($row = $result->fetch_assoc())
  {                  
  $id_categoria=stripslashes($row["id_categoria"]);
  $ccategoria=stripslashes($row["categoria"]);
 # $contador=$contador+1;
  echo "<option value='$id_categoria'>$ccategoria</option>";
  }

//Aqui va la consulta de las categorias
?>
</select>
 <input type="submit" class="btn btn-deep-orange" value="Crear Producto"/> 
 </form>
 
 </div>
  </section>

  
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

