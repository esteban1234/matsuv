<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

     <div class="linea"></div>
<header>
  <figure class="logo pull-left">
    <img src="../img/matsuv.png" alt="Matsuv" class="img-responsive"> 
  </figure>
  <nav class="pull-right">
    <ul>
      <a class="selector" href="../index.php">INICIO</a>
      <a class="selector" href="nosotros.php">NOSOTROS</a>
      <a class="selector" href="servicios.php">SERVICIOS</a>
      <a class="selector" id="select" href="contacto.php">CONTACTO</a>
    </ul>
  </nav>
</header>

<div class="bannern">
    <p class="pull-left q">
      Contacto
    </p>
    <div class="pull-right q1">
        <a href="../index.php">Index</a> <span class="divider">/</span>
        <a id="active1" href="contacto.php">Contacto</a>
    </div>
  </div>

<br><br>
	

<div class="container">
        <h1 class="text-center text-danger">Contactános</h1>
        <p class="text-center text-danger">Escribenos tus comentario, dudas o preguntas, estamos para servirte.</p><br><br>

    <div class="row">
        <div class="col-sm-4">
            <h4>MATSUV CONSULTORA Y SOLUCIONES EMPRESARIALES SA DE CV</h4>
            <hr>
            <address>
                <strong>Dirección:</strong> C. Ixhuatan #292 por C. Simojovel y<br> C. Tabasco
                Col. Centenario Tuchtlan.<br> Tuxtla Gutierrez. Chiapas
                C.P. 29025 <br><br>
                <strong>Email:</strong> <a href="mailto:#"> info@matsuv.com</a><br><br>
                <strong>Teléfono:</strong> PENDIENTE<br><br>
                <strong>Horario:</strong> Lunes a Viernes de 9 am a 6 pm
            </address>
        </div>
        <div class="col-sm-8 contact-form">
            <form id="contact" method="post" class="form" role="form">
                <div class="row">
                    <div class="col-xs-6 col-md-4 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Escribe tu nombre completo" type="text" required autofocus />
                    </div>
                    <div class="col-xs-6 col-md-4 form-group">
                    <input class="form-control" id="tel" name="tel" placeholder="Escribe tu numero teléfonico" type="text" required autofocus />
                    </div>
                    <div class="col-xs-6 col-md-4 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                    </div>
                </div>
                <textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje" rows="5"></textarea>
            <br/>
                <div class="row">
                    <div class="col-xs-12 col-md-12 form-group">
                    <button class="btn btn-danger pull-right" type="submit">Enviar mensaje</button>
                    </div>
                 </div>   
            </form>
        </div>
    </div>
</div>

<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.1772568386664!2d-93.16883268569215!3d16.76785448845268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd96842ae9aa7%3A0x52829a31c183b64e!2sIxhuat%C3%A1n+292%2C+Centenario+Tuchtl%C3%A1n%2C+29025+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses!2smx!4v1502826534888" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
