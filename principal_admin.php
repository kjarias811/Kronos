<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css" />
<link rel="icon" type="img/png" href="imagenes/Logo.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<select class="body view">
    <div class="mask rgba-black-ligh" ></div>
</select>

    <div id="menu">
        <?php
        include ("menu.php");
        ?>
    </div>
   
    <div id="general"> 


    <div id="col1">
    <section class="fondo1 view">
    | 
<div class="mask rgba-black-strong">



    <div class="colum1">
     <img src="https://i0.wp.com/www.ideediseno.co/wp-content/uploads/2020/04/idee-produccion.png?fit=184%2C250&ssl=1" alt="">
    </div>
    <div class="colum2">
      <h1>Kronnos Inventory</h1>
      <h3 id="text2">Manten tu inventario ordenado.</h3>
      <span id="text2">Manten un registro exactamento el stock de la empresa  en cualquier momento, con una simple consulta.</span>
            </div>
        </div>
    </div>
    </section>



    
    </div>
    </div> 
    <div id="cuerpo" >

 

    <div class="galeria">
        <h1 id="galeria">Galeria </h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="imagenes/img1.jpg" alt="">
                <div class="overlay">
                <h2>COL-MASCOTAS</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/img2.jpg" alt="">
                <div class="overlay">
                <h2>COL-MASCOTAS</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/img3.jpg" alt="">
                <div class="overlay">
                <h2>COL-MASCOTAS</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/img4.jpg" alt="">
                <div class="overlay">
                <h2>COL-MASCOTAS</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/img5.jpg" alt="">
                <div class="overlay">
                <h2>COL-MASCOTAS</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/img6.jpg" alt="">
                <div class="overlay">
                <h2>COL-MASCOTAS</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/img7.jpg" alt="">
                <div class="overlay">
                <h2>COL-MASCOTAS</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/img8.jpg" alt="">
                <div class="overlay">
                <h2>COL-MASCOTAS</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="imagenes/img9.jpg" alt="">
                <div class="overlay">
                    <h2>COL-MASCOTAS</h2>
                </div>
            </div>
            <!-- <div class="imagen">
                <img src="img/1 (2).jpg" alt="">
            </div> -->
        </div>
    </div>




    </div>
    <div class="cuerpo2" >

     <div id="hc">
     <h3 id="galeria">¿Que deseas hacer?</h3>   
     <a href="pre_crear_categoria.php"><button type="button" class="btn btn-outline-primary waves-effect">Crear categoria</button></a>
     <a href="pre_crear_producto.php"><button type="button" class="btn btn-outline-default waves-effect" >Crear Producto</button></a>
     <a href="pre_crear_producto.php"><button type="button" class="btn btn-outline-secondary waves-effect">Provedor</button></a> 
     <a href="pre_editar_producto.php"><button type="button" class="btn btn-outline-success waves-effect">Modificar</button></a>
     <a href=""><button type="button" class="btn btn-outline-info waves-effect">preguntas</button></a>
     <a href="pre_consultar_productos.php"><button type="button" class="btn btn-outline-warning waves-effect">consultar</button></a>
     <a href=""><button type="button" class="btn btn-outline-danger waves-effect">Danger</button></a>
     </div>
    
    </div>

    <div id="col2">
        <?php
        include ("col2.php");
        ?>
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