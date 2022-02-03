<header class="encabezado bg-primary" role="banner" id="menu">

  <?php include "vistas/partes/menu.php"; ?>
  <!--cierre de barra-->

</header>

<main id="pagos">
  <div class="container contenido">
    <div class="row">
      <div class="col-12 col-md-4">

        <div class="form-group">
          <label for="">PAGO</label>
          <form action="checkout" method="POST" class="needs-validation" novalidate>
            <div class="form-group">
             
              <input type="number" class="form-control"  value="<?php if (isset($_POST['pago'])) {
                                                                echo $_POST['pago'];
                                                              } else {
                                                                echo "00.00";
                                                              } ?>" maxlength="256" name="quantity" data-name="quantity" min="1.00" step="0.01" id="input-stripe-quantity" required>
                                                              <small id="helpId" class="text-muted">Ingrese el monto</small><br>
              <div class="valid-feedback">Correcto.</div>
              <div class="invalid-feedback">Porfavor ingrese un monto correcto</div>
            </div>
            <button type="submit" class="btn btn-primary  w-100 mt-4" >Pagar <i class="fa fa-credit-card"></i></button>
          </form>
        </div>

      </div>
      <div class="col-12 col-md-8">
        <p>Este pago se podra realizar a través tarjetas de crédito/debito,
          una vez realizado, deberá enviar el
          comprobante de la transacción al correo <a href="mailto:dirposgrado@pstg.uni.edu.ni" class="link-7">dirposgrado@pstg.uni.edu.ni</a> para proceder
          a confirmar su Inscripción.</p>
      </div>
    </div>
  </div>
</main>



<?php include "vistas/partes/footer.php"; ?>