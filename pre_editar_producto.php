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
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">  


  <title>Editar Producto</title>

</head>

<body>

  <div id="banner">


  </div>
  <div id="menu">
    <?php
    include("menu.php");
    ?>

  </div>
  <div id="general">



    <div id="cuerpo">
      <div class="view spider">
        <div class="mask flex-center rgba-black-strong">
          <div class="container register">
            <div class="row">
              <div class="col-md-3 register-left">
                <img src="https://www.flexxus.com.ar/wp-content/uploads/2017/03/what-is-inventory-management.png" alt="" />
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
                <input type="submit" name="" value="Login" /><br />
              </div>
              <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">


                  <table>
                    <tr>
                      <td>




                        <?php
                        //consultar el producto actual
                        include_once("conexion.php");
                        $cod_producto = $_POST["cod_producto"];
                        $sql =  "SELECT * FROM productos WHERE cod_producto='$cod_producto'";
                        if (!$result = $conex->query($sql)) {
                          die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $conex->error . ']');
                        }
                        while ($row = $result->fetch_assoc()) {
                          $iid_producto = stripslashes($row["id_producto"]);
                          $ccod_producto = stripslashes($row["cod_producto"]);
                          $pproducto = stripslashes($row["producto"]);
                          $ffk_id_categoria = stripslashes($row["fk_id_categoria"]);
                          $cantida3 = stripslashes($row["cantidad"]);
                          //sUBCONSULTA CATEGORIA
                          $sqlcat =  "SELECT * FROM categorias WHERE id_categoria='$ffk_id_categoria'";
                          if (!$resultcat = $conex->query($sqlcat)) {
                            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $conex->error . ']');
                          }
                          while ($rowcat = $resultcat->fetch_assoc()) {
                            $ccategoria = stripslashes($rowcat["categoria"]);
                          }
                          //sUBCONSULTA CATEGORIA



                        }
                        //consultar el producto actual

                        ?>

                      </td>



                      <td>

                        <form id="form1" method="post" name="form1" action="neg_dat_editar_producto.php">
                          <p>&nbsp;</p>
                          <h1 id="edit" ><p>Editar Producto</h1>
                          <h4 style="font-family: 'Piedra', cursive;">
                          <div></div>
                            <p class="white-text"> Codigo del producto</p>
                          </h4>

                          <input id="editar" class="text-center" required="" type="text" name="cod_producto" id="cod_producto" value="<?php echo $ccod_producto ?>" /></br>
                          </p>
                          <p>&nbsp;</p>
                          <h4 style="font-family: 'Piedra', cursive;">
                            <p class="white-text"> Nombre del producto</p>
                          </h4>
                          <p>
                            <input id="editar" class="text-center" required="" type="text" name="producto" id="producto" value="<?php echo $pproducto ?>" />

                          <p>&nbsp;</p>
                          <h4 style="font-family: 'Piedra', cursive;">
                            <p class="white-text"> Cantidad</p>
                          </h4>

                          <input id="editar" class="text-center" required="" type="text" name="cantidad" id="cantidad" value="<?php echo $cantida3 ?>" />
                          </br>


                          <h4 style="font-family: 'Piedra', cursive;">
                            <p class="white-text">Seleccione la Categor&iacute;a:</p>
                          </h4>


                          <h5><select id="op" required="" name="fk_id_categoria" id="fk_id_categoria" required="required"></h5>


                          <?php
                          echo "<option   class=' blue-grey darken-4 text-white' value='$ffk_id_categoria'>$ccategoria</option>";
                          //Aqui va la consulta de las categorias
                          include("conexion.php");
                          $sql =  "SELECT * FROM categorias";
                          if (!$result = $conex->query($sql)) {
                            die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $conex->error . ']');
                          }
                          while ($row = $result->fetch_assoc()) {
                            $iid_categoria = stripslashes($row["id_categoria"]);
                            $ccategoria = stripslashes($row["categoria"]);
                            $contador = $contador + 1;
                            echo "<option  class='blue-grey darken-4 text-white'  value='$iid_categoria'>$ccategoria</option>";
                          }

                          //Aqui va la consulta de las categorias
                          ?>
                          </select>
                          </p>
                          <p>&nbsp;</p>
                         

                          <button type="submit" style="font-family: 'Lobster', cursive;" value="Editar Producto" class="btn btn-red accent-4 text-white "> editar producto <i class="far fa-edit"></i> </button>

                          <p>&nbsp;</p>
                        </form>
                      </td>


                      <td>
              </div>
              </td>
              </tr>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div id="col2">
    <?php
    include("col2.php");
    ?>
  </div>
  </div>

  <div id="footer">
    <?php
    include("footer.php");
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





  <script>
    $(document).ready(function() {
      $('#mitabla').DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
      });
    });
  </script>

</body>

</html>