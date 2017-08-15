
<?php include 'vistas/encabezado.php' ?>
<body>

<div class="linea"></div>
<header>
  <figure class="logo pull-left">
    <img src="img/matsuv.png" alt="Matsuv" class="img-responsive"> 
  </figure>
  <nav class="pull-right">
    <ul>
      <a class="selector" id="select" href="index.php">INICIO</a>
      <a class="selector" href="vistas/nosotros.php">NOSOTROS</a>
      <a class="selector" href="vistas/servicios.php">SERVICIOS</a>
      <a class="selector" href="vistas/contacto.php">CONTACTO</a>
    </ul>
  </nav>
</header>
  
  <div class="banner">
    <p>Ayudamos a las empresas <br> a encontrar el camino más fácil <br> al logro de sus objetivos</p>
    <center class="" style="margin-top: 5%;">
      <a class="boton" href="vistas/contacto.php">CONTÁCTANOS</a>
    </center>
  </div>

  <article class="algnserv">
    <div class="container conten">
      <h1 class="text-center scrollflow -pop -opacity">Algunos de nuestros servicios</h1>
      <br><br>
      <div class="uno scrollflow -slide-top -opacity">
        <div class="image">
          <img src="img/consultoriaadministracion.jpg" alt="" class=" img-responsive">
        </div> <br><br>
        <h3 class="text-center">Consultoria en Administración</h3>
      </div>
      <div class="dos scrollflow -slide-bottom -opacity">
        <div class="image">
          <img src="img/contabilidad.jpg" alt="" class=" img-responsive">
        </div> <br><br>
        <h3 class="text-center">Servicios Contables </h3>
      </div>
      <div class="tres scrollflow -pop -opacity">
        <div class="image">
          <img src="img/fiscal.png" alt="" class=" img-responsive">
        </div> <br><br>
        <h3 class="text-center">Estrategia Fiscal</h3>
      </div>
    </div>
  </article>

  <div class="bannerc">
    <p class="pull-left texto scrollflow -slide-right ">
      ¡Conoce más sobre las soluciones y herramientas con las que podemos <br> fortalecer y expandir tu empresa! <br><br>
     <small> Contáctenos para agendar una visita SIN COSTO y presentarle una propuesta detallada de trabajo.</small>
    </p>
    <div class="pull-right botonc scrollflow -slide-left ">
      <a class="btn btn-danger btn-outline btn-lg" href="vistas/contacto.php">CONTACTANOS</a>
    </div>
  </div>



<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/botonarriba.js"></script>
<script src="js/eskju.jquery.scrollflow.min.js"></script>

</body>
</html>
