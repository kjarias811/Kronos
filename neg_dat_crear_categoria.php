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

    <div id="banner">
       

    </div>
    <div id="menu">
        <?php
        include ("menu.php");
        ?>

    </div>
<div id="general">

    <div id="cuerpo">
    <div class="cuerpo6">
    <?php
  class Categoria
  {
    public function registrar($categoria)
      {

  include ("conexion.php");
  $contador="0";
  //consultar primero si la categoria ya existe
    $sql =  "SELECT * FROM categorias WHERE categoria='$categoria'";
  if(!$result = $conex->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $conex->error . ']');
  }
  while($row = $result->fetch_assoc())
  {                  
  $ccategoria=stripslashes($row["categoria"]);
  $contador=$contador+1;
  }
  //consultar primero si la categoria ya existe
 
  if ($contador=="0")
  {
  mysqli_query($conex,"INSERT INTO categorias (id_categoria,categoria) 
  VALUES (NULL, '$categoria')") or die(mysqli_error($conex));
  echo "<h1><i class='fas fa-check-circle text-success'>¡La categoria se a creado correctamente!</i><i class='fas fa-check-circle text-success'></i></h1>";
 echo "<img src='imagenes/img11.png' style='width: 300px;'>";
}
  if ($contador!="0")
  {
    echo "<div class='cuerpo5'>";
    echo "<h1><i class='fas fa-exclamation-triangle text-warning'>¡Esta categoria ya existe!</i><i class='fas fa-exclamation-triangle text-warning'></i></h1>"; 
    echo "<img src='imagenes/img13.png' style='width: 300px;'>";
echo"</div>";
  }
    }


  }

$nuevo=new Categoria();
$nuevo->registrar($_POST["categoria"]);

  ?> 

    </div>
  
  
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