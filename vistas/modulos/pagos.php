<header class="encabezado bg-primary" role="banner" id="menu">

  <?php include "vistas/partes/menu.php"; ?>
  <!--cierre de barra-->

</header>

<main id="principal">
  <div class="container contenido">
    <div class="row">
      <div class="col-12 col-md-4">

        <div class="form-group">
          <label for="">PAGO</label>
          <form action="checkout" method="POST">
            <input type="number" class="form-control" value="<?php if (isset($_POST['pago'])) {
                                                                echo $_POST['pago'];
                                                              } else {
                                                                echo "00.00";
                                                              } ?>" maxlength="256" name="quantity" data-name="quantity" min="1.00" step="0.01" id="input-stripe-quantity">
            <small id="helpId" class="text-muted">Ingrese el monto</small><br>
            <button type="submit" id="checkout-button" class="btn btn-primary  w-100 mt-4">Pagar <i class="fa fa-credit-card"></i></button>
          </form>
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



<?php include "vistas/partes/footer.php"; ?>