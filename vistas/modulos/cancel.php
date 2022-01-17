<header class="encabezado bg-primary" role="banner" id="menu">

  <?php include "vistas/partes/menu.php"; ?>
  <!--cierre de barra-->

</header>

<main id="cancel">
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
      <div class="col-12 col-md-12">
        <p style="font-size: 1.5rem; text-align: justify;">Este pago se podra realizar a través de transferencias bancarias o tarjeta de crédito
          Para realizar el pago con tarjeta de crédito, <a href="pagos" target="_blank">pulse aquí</a>, una vez realizado su pago, deberá enviar el
          comprobante de la transacción al correo <a href="mailto:dirposgrado@pstg.uni.edu.ni" class="link-7">dirposgrado@pstg.uni.edu.ni</a> para proceder
          a confirmar su Inscripción.</p>
        <ul class="list-group mt-4">
          <li class="list-group-item"><strong>Cuenta:</strong> CAPACITACIONES EXTENSUS, LLC</li>
          <li class="list-group-item"><strong>Direccion:</strong> 1795 Bonaventure Blvd, Weston, FL 33326
          </li>
          <li class="list-group-item"><strong>No. Cuenta:</strong> 898108779869</li>
          <li class="list-group-item"><strong>ABA:</strong> 026009593</li>
          <li class="list-group-item"><strong>Nombre del Banco:</strong> Bank of America</li>

        </ul>
      </div>
    </div>
  </div>
</main>



<?php include "vistas/partes/footer.php"; ?>

<script type="text/javascript">
   //Redireccionamiento tras 5 segundos
  //  setTimeout( function() { window.location.href = "//RUTA_DOMAIN"+'pagos'; }, 7000 );
</script>