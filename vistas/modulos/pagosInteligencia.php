<header class="encabezado bg-primary" role="banner" id="menu">

    <?php include "vistas/partes/menu.php"; ?>
    <!--cierre de barra-->

</header>


<main id="principal">
    <div class="container contenido">
        <div class="row">
            <div class="contenido-1 col-md-8 ">
                <h2 style="color:#003891;"> Costes y Forma de Pago para Inteligencia de Negocios y Ciberseguridad</h2>
                <p class="text-justify mt-4">Precio Oficial: <strong>USD 300.00</strong><br><br>

                    La Dirección de Estudios de Posgrado y Educación Continua de la Universidad Nacional de
                    Ingeniería (UNI) en aras del fortalecimiento de las competencias y desarrollo de nuestros
                    profesionales, ha gestionado una exoneración del 60 % para estudiantes Nicaragüenses y un
                    50 % para estudiantes Internacionales en base al precio oficial del curso.<br><br>

                    <strong>Facilidades de pago para Estudiantes Internacionales</strong><br><br>

                    1. Pago por cancelación anticipada: 10 % de descuento, adicional a la exoneración del 50 %: <br><strong>USD
                        135.00</strong><br><br>
                <form action="pagos" method="POST" target="_blank">
                    <div class="col mb-4">
                        <input type="hidden" name="pago" value="135.00">
                        <button type="submit" class="btn btn-primary  w-100" target="blank_">Realizar Pago de USD 135.00</a>
                    </div>
                </form>

                2. Pago en 2 cuotas:<br><br>

                Al momento de la Inscripción: <strong>USD 75.00</strong><br>
                Finalizando la cuarta semana: <strong>USD 75.00</strong><br><br>
                <form action="pagos" method="POST" target="_blank">
                    <div class="col mb-4">
                        <input type="hidden" name="pago" value="75.00">
                        <button type="submit" class="btn btn-primary  w-100" target="blank_">Realizar Cuota de USD 75.00</a>
                    </div>
                </form>

                <strong>Facilidades de pago para Estudiantes Nicaragüenses</strong><br><br>

                1. Pago por cancelación anticipada: 10 % de descuento, adicional a la exoneración del 60 %: <br><strong>USD
                    108.00</strong><br><br>
                <form action="pagos" method="POST" target="_blank">
                    <div class="col mb-4">
                        <input type="hidden" name="pago" value="108.00">
                        <button type="submit" class="btn btn-primary  w-100" target="blank_">Realizar Pago de USD 108.00</a>
                    </div>
                </form>

                2. Pago en 2 cuotas:<br><br>

                Al momento de la Inscripción: <strong>USD 60.00</strong><br>
                Finalizando la cuarta semana: <strong>USD 60.00</strong><br>

                <form action="pagos" method="POST" target="_blank">
                    <div class="col mb-4">
                        <input type="hidden" name="pago" value="60.00">
                        <button type="submit" class="btn btn-primary  w-100" target="blank_">Realizar Cuota de USD 60.00</a>
                    </div>
                </form>

                <!-- <h2> Formas de Pago</h2><br>
                <p>Los pagos se realizaran a través de transferencias bancarias o tarjeta de crédito
                    Para realizar el pago con tarjeta de crédito, <a href="pagos" target="blank_">pulse aquí</a>, una vez realizado su pago, deberá enviar el
                    comprobante de la transacción al correo <a href="mailto:dirposgrado@pstg.uni.edu.ni" class="link-7">dirposgrado@pstg.uni.edu.ni</a> para proceder
                    a confirmar su Inscripción.</p>
                <ul class="list-group mt-4">
                    <li class="list-group-item"><strong>Cuenta:</strong> CAPACITACIONES EXTENSUS, LLC</li>
                    <li class="list-group-item"><strong>Direccion:</strong> 1795 Bonaventure Blvd, Weston, FL 33326
                    </li>
                    <li class="list-group-item"><strong>No. Cuenta:</strong> 898108779869</li>
                    <li class="list-group-item"><strong>ABA:</strong> 026009593</li>
                    <li class="list-group-item"><strong>Nombre del Banco:</strong> Bank of America</li>

                </ul> -->

                <!-- Tip: use bg-* and text-* utilities to style the card -->
                <div class="card text-white bg-primary mb-3 d-inline-block" style="max-width: auto;">
                    <!-- <div class="card-header">Formas de Pago</div> -->
                    <div class="card-body">
                        <h4 class="card-title">Formas de Pago</h4>
                        <p class="card-text">
                        <p>Los pagos se realizaran a través de transferencias bancarias o tarjeta de crédito
                            Para realizar el pago con tarjeta de crédito, <a href="pagos" target="blank_">pulse aquí</a>, una vez realizado su pago, deberá enviar el
                            comprobante de la transacción al correo <a href="mailto:dirposgrado@pstg.uni.edu.ni" class="link-7">dirposgrado@pstg.uni.edu.ni</a> para proceder
                            a confirmar su Inscripción.</p>
                        <ul class="mt-4">
                            <li><strong>Cuenta:</strong> CAPACITACIONES EXTENSUS, LLC</li>
                            <li><strong>Direccion:</strong> 1795 Bonaventure Blvd, Weston, FL 33326
                            </li>
                            <li><strong>No. Cuenta:</strong> 898108779869</li>
                            <li><strong>ABA:</strong> 026009593</li>
                            <li><strong>Nombre del Banco:</strong> Bank of America</li>

                        </ul>
                    </div>
                </div>


            </div>

            <div class="contenido-2 col-md-4 mt-4">
                <img src="<?= RUTA_DOMAIN ?>vistas/img/pp6.png" alt="" class="img-fluid">
                <br />
                <br />
                <img src="<?= RUTA_DOMAIN ?>vistas/img/pp7.png" alt="" class="img-fluid">
                <br />
                <br />
                <img src="<?= RUTA_DOMAIN ?>vistas/img/pp8.png" alt="" class="img-fluid">
                <br />
                <div class=" mt-4">
                    <p class="text-justify"><strong>Si desea mayor información favor contactar: </strong></p>
                    <ul>
                        <li><a target="_blank" href="https://bit.ly/3jMrIjL" class="link-7">
                                Formulario de Información</a>
                        </li>
                        <li><a href="tel:+50522781457">+505 2278 - 1457</a> / <a href="tel:+50522705612"> +505 2270
                                - 5612</a></li>
                        <li><a href="tel:+50522772728">+505 2277 - 2728</a> / <a href="tel:+5077067762"> +505 7706 -
                                7762</a></li>
                        <li><a href="tel:+50586250986">+505 8625 - 0986</a></li>
                    </ul>
                </div>
            </div>
            <div>

            </div>
        </div>

        <div class="div-block"></div>
    </div>
</main>


<?php include "vistas/partes/footer.php"; ?>