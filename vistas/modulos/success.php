<header class="encabezado bg-primary" role="banner" id="menu">

  <?php include "vistas/partes/menu.php"; ?>
  <!--cierre de barra-->

</header>

<main id="info">
  <div class="container contenido">
    <div class="row text-center">

    <div class="col-12 col-md-12">     
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>El pago se ha realizo satisfactoriamente</strong>
        </div>
      </div>

      <div class="col-12 d-flex justify-content-center">
          <div id="logoanimationsuccess" class="col-12 col-md-5">
        </div>
      </div>
      
      
      <div class="col-12 col-md-12">
        <p style="font-size: 1.5rem; text-align: justify;">Recuerde enviar el comprobante de la transacción al correo <a href="mailto:dirposgrado@pstg.uni.edu.ni" class="link-7">dirposgrado@pstg.uni.edu.ni</a> para proceder
          a confirmar su Inscripción.</p>
      </div>
    </div>
  </div>
</main>



<?php include "vistas/partes/footer.php"; ?>

<!-- <script type="text/javascript">
   //Redireccionamiento tras 5 segundos
   setTimeout( function() { window.location.href = "RUTA_DOMAIN"+'pagos'; }, 5000 );
</script> -->