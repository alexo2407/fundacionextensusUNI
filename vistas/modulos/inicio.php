<header class="encabezado bg-primary" role="banner" id="menu">

    <!-- Menu -->

    <?php include "vistas/partes/menu.php"; ?>
    <!--cierre de barra-->

</header>


<!-- slider de imagenes -->

<?php include "vistas/partes/slider.php"; ?>
<!-- termina el slider -->

<div class="container  section-1 mt-4">
    <h1 class=" heading text-center">CURSOS DE ESPECIALIZACIÓN EN ANALÍTICA AVANZADA, INTELIGENCIA DE NEGOCIOS Y CIBERSEGURIDAD</h1>
    <div class="row py-4">
        <div class="col-sm-3 text-center py-2">
            <img id="img1" src="<?= RUTA_DOMAIN ?>vistas/img/logo-extensus.jpg">
        </div>
        <div class="col-sm-3 text-center py-2">
            <img id="img2" src="<?= RUTA_DOMAIN ?>vistas/img/logo-uni.jpg">
        </div>
        <div class="col-sm-6 text-center py-2">
            <img id="img3" src="<?= RUTA_DOMAIN ?>vistas/img/csi.jpg">
        </div>
    </div>

</div>

<div class="section-2 mt-4">
    <div class="container text-center">
        <h2><strong>Te Ofrecemos</strong></h2>
        <ul class="list-group text-center">
            <li class="list-group-item">Instructores y enseñanzas de <b>Primer Nivel</b></li>
            <li class="list-group-item">Modalidad <b>Virtual (SINCRONICO)</b></li>
        </ul>
    </div>
</div>

<main class="servicios pt-4 mt-4 principal">
    <div class="container">
        <!-- <h2 class="text-center font-weight-bold">Nuestros Servicios</h2> -->

        <div class="row servicios-row">
            <div class="col-12 col-md-2 text-center">
                <p><img src="<?= RUTA_DOMAIN ?>vistas/img/path1786.png"></p>
            </div>
            <div class="col-12 col-md-10">
                <h3 class="my-2">Certificada por la UNI</h3>
                <p>Los Cursos de Especialización en Analítica Avanzada, se ofertan a través de la Universidad Nacional de Ingeniería UNI.</p>
                </article>
            </div>
        </div>

        <div class="row servicios-row">
            <div class="col-12 col-md-2 text-center">
                <p><img src="<?= RUTA_DOMAIN ?>vistas/img/path1607.png"></p>
            </div>
            <div class="col-12 col-md-10">
                <h3 class="my-2">Instructores expertos internacionales</h3>
                <p>El contenido del Curso será impartido por instructores expertos en
                    tecnologías de la información con prestigio internacional certificados.</p>
                </article>
            </div>
        </div>


        <div class="row servicios-row">
            <div class="col-12 col-md-2 text-center">
                <p><img src="<?= RUTA_DOMAIN ?>vistas/img/path1763.png"></p>
            </div>
            <div class="col-12 col-md-10">
                <h3 class="my-2">Somos Dirección Regional para Nicaragua y Centroamérica</h3>
                <p>de la Asociación de Universidades Iberoamericana de Postgrado (AUIP),
                    miembros de la Confederación Superior Universitaria Centroamericana y del Caribe – CSUCA y
                    Sistema Regional Centroamericano y del Caribe de Investigación y Postgrado. (SIRCIP)</p>
                </article>
            </div>
        </div>


    </div>
</main>


<div class="section-nosotros">
    <div class="container">
        <h2 class="heading text-center">Tu Educación en Manos de Profesionales</h2>

        <div class="div-block"></div>
        <p class="text-center pt-4"><span></span></p>

        <div class="row">
            <div class="card col-md-4 text-center">
                <p> <img class="card-img-top" src="<?= RUTA_DOMAIN ?>vistas/img/2.jpg" alt="Card image cap"></p>
                <div class="card-body">
                    <h4 class="card-title">Ing. Nelson Morrison, M.Sc.,</h4>
                    <p class="card-text">
                        Presidente de Fundación Extensus y Director General de CSiCaribe
                    </p>
                </div>
            </div>
            <div class="card col-md-4 text-center">
                <p><img class="card-img-top" src="<?= RUTA_DOMAIN ?>vistas/img/denys.png" alt="Card image cap"></p>
                <div class="card-body">
                    <h4 class="card-title">Lic. Denys López, Máster.,</h4>
                    <p class="card-text">
                        Directora de Fundación Extensus
                    </p>
                </div>
            </div>
            <div class="card col-md-4 text-center">
                <p><img class="card-img-top" src="<?= RUTA_DOMAIN ?>vistas/img/4.jpg" alt="Card image cap"></p>
                <div class="card-body">
                    <h4 class="card-title">Ing. Freddy González, M.Sc.,</h4>
                    <p class="card-text">
                        Director de Estudios de Posgrado y Educación Continua UNI & Director Regional de AUIP
                    </p>
                </div>
            </div>
        </div>
        <div class="div-block"></div>

    </div>
</div>

<div class="contacto mt-4">
    <div class="container">
        <div class="col text-center">
            <h1 class="mt-4">Conviértete en un Científico de Datos (Data Scientist)<br />y desarrolle sus
                técnicas de Inteligencia de Negocios y Ciberseguridad</h1>
            <h3 style="font-weight:normal !important">CURSOS DE ESPECIALIZACIÓN EN ANALÍTICA AVANZADA,<br />
                INTELIGENCIA DE NEGOCIOS Y CIBERSEGURIDAD</h3>
            <h2 class="mt-4"><b>UNIVERSIDAD NACIONAL DE INGENIERIA (UNI)</b></h2>
        </div>
        <div class="col text-center">
            <h3 class="mt-4">Ponte en contacto con nosotros</h3>
            <p>Si tienes alguna pregunta nosotros tenemos la respuesta. Envíamos un mensaje y nuestro equipo te
                contestará personalmente.</p>
            <button type="button" class="btn btn-primary"><a style="color: #FFFFFF; text-decoration:none;" href="contacto">CONTACTAR</a></button>
        </div>
    </div>
</div>

<?php include "vistas/partes/footer.php"; ?>