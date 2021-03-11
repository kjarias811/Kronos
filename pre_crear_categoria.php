<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css" />
<link rel="icon" type="img/png" href="imagenes/Logo.png">
<title>Pagina principal</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
</head>
<body>

    <div id="menu">
        <?php
        include ("menu.php");
        ?>
        </div>

    
    <div id="general">
        
    
    <div class="cuerpo4">    
        
        <h2 id="titulo2">&nbsp;Crea tu categoria</h2>
        <form id="form1" action="neg_dat_crear_categoria.php" method="POST">
        <input  id="categoria" required="" style="color: ghostwhite;" type="text" placeholder="Crear categoria" name="categoria">
        <button class=" -roundedbtnbtn btn-rounded btn-deep-orange btn-lg">Crear<i class="fas fas fa-plus-circle pl-1"></i></button>
    </form>
    <div class="container">
  <div class="row">
    <div class="col">
    <h1 id="icons2"><i class="fab fa-apple"></i></h1>
    </div>
    <div class="col">
     <h1 id="icons2"><i class="fab fa-android"></i></h1>
    </div>
    <div class="col">
     <h1 id="icons2"><i class="fab fa-windows"></i></h1>
    </div>
  </div>
</div>
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

<script> new WOW() .init()</script>

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

  