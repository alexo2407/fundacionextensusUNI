<!-- headers de la pagina -->

<?php include "vistas/partes/header.php"; ?>

<main id="cancel" class="contenido-principal">
  <div class="container contenido">
    <div class="row text-center">
      
      <div class="col-12 col-md-12">
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Gestión Cancelada</strong>
        </div>
      </div>
      <div class="col-12 d-flex justify-content-center">
        <div id="logoanimationcancel" class="col-12 col-md-3">
        </div>
      </div>
      <div class="col-12 d-flex justify-content-center">
        <p>Este pago se podra realizar a través tarjetas de crédito/debito,
          una vez realizado, deberá enviar el
          comprobante de la transacción al correo <a href="mailto:dirposgrado@pstg.uni.edu.ni" class="link-7">dirposgrado@pstg.uni.edu.ni</a> para proceder
          a confirmar su Inscripción.</p>
      </div>
    </div>
  </div>
</main>



<?php include "vistas/partes/footer.php"; ?>

<script type="text/javascript">
   //Redireccionamiento tras 5 segundos
  //  setTimeout( function() { window.location.href = "//RUTA_DOMAIN"+'pagos'; }, 7000 );
</script>