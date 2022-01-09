<header class="encabezado bg-primary" role="banner" id="menu">

  <?php include "vistas/partes/menu.php"; ?>
  <!--cierre de barra-->

</header>

<main id="principal">
  <div class="container contenido">
    <div class="row">
      <div class="col-12">
        <div id="error-message"> </div>
        <div class="w-form-fail" id="payresult" style="display: none;">
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Hubo un error, el monto solo puede tener 2 decimales.</strong> 
          </div>
        </div>
        <?php
        if (isset($_GET['success'])) {
          echo '<div class="w-form-fail" style="display: block; background-color: #b0f45d;"><div>Su pago a Transcurrido con  Exito.</div></div>';
        }
        if (isset($_GET['canceled'])) {
          echo '<div class="w-form-fail" style="display: block;"><div>Atención! Hubo un Error con su pago.</div></div>';
        }
        ?>
      </div>
      <div class="col-12 col-md-4">
        <div class="form-group">
          <label for="">PAGO</label>
          <input type="number" class="form-control" value="<?php if (isset($_POST['pago'])) {
                                                              echo $_POST['pago'];
                                                            } ?>" maxlength="256" name="name-4" data-name="Name 4" min="1.00" step="0.01" id="input-stripe-quantity">
          <small id="helpId" class="text-muted">Ingrese el monto</small>
        </div>
        <div class="form-group">
          <button id="basic-stripe-button" onclick="paystripe()" type="button" class="btn btn-primary btn-lg w-100">Pagar <i class="fa fa-money-check-alt"></i></button>
        </div>

    
      </div> 
        <div class="col-12 col-md-8">
          <p>Este pago se podra realizar a través de transferencias bancarias o tarjeta de crédito
            Para realizar el pago con tarjeta de crédito, una vez realizado su pago, deberá enviar el
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

<!-- <div class="section-2 wf-section">
  <h3 class="heading-5">Pago</h3>
</div>
<div class="section-4-copy wf-section">
  <div class="form-block-2 w-form">
    <div id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form">
      <div class="div-block-75-copy"><label for="name" class="field-label">Monto:<br></label><input type="number" class="text-field-9 w-input" maxlength="256" name="name-4" data-name="Name 4" min="1.00" step="0.01" type="number" placeholder="1.00" id="input-stripe-quantity"><button id="basic-stripe-button" onclick="paystripe()" type="button" class="submit-button-2 w-button">Pagar</button></div>
    </div>
    <div id="error-message"> </div>
    <div class="w-form-fail" id="payresult" style="display: none;">
      <p class="h3">Hubo un error, el monto solo puede tener 2 decimales.</p>
    </div>
    <?php
    // if (isset($_GET['success'])) {
    //   echo '<div class="w-form-fail" style="display: block; background-color: #b0f45d;"><div>Su pago a Transcurrido con  Exito.</div></div>';
    // }
    // if (isset($_GET['canceled'])) {
    //   echo '<div class="w-form-fail" style="display: block;"><div>Atención! Hubo un Error con su pago.</div></div>';
    // }
    ?>
  </div>
</div> -->

<?php include "vistas/partes/footer.php"; ?>