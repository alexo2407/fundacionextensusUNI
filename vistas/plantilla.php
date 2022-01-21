<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:site_name" content="Dirección de Estudios de Posgrados y
                    Educación Continua (UNI-DEPEC)
                    Managua, Nicaragua">
<meta property="og:title" content="UNI-DEPEC" />
<meta property="og:description" content="CURSOS DE ESPECIALIZACIÓN EN ANALÍTICA AVANZADA, INTELIGENCIA DE NEGOCIOS Y CIBERSEGURIDAD" />
<meta property="og:image" itemprop="image" content="<?=URL_DOMAIN?>/vistas/img/thumbnailuni.png">
<meta property="og:type" content="<?=URL_DOMAIN?>" />
<meta property="og:updated_time" content="1440432930" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= RUTA_DOMAIN ?>vistas/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
            }
        });
    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->

    <link rel="stylesheet" href="<?= RUTA_DOMAIN ?>vistas/css/font-awesome.min.css" type="text/css">

    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->


    <link rel="stylesheet" href="<?= RUTA_DOMAIN ?>vistas/css/style.css">
    <title>Inicio</title>
    <link rel="shortcut icon" href="<?= RUTA_DOMAIN ?>vistas/img/favicon.ico" />
    <script src="https://js.stripe.com/v3/"></script>


</head>

<body>

    <?php

    $mostrarModulo = new EnlacesControlador();
    $mostrarModulo->enlacesControlador();

    ?>

    <a data-scroll href="#header" class="ir-arriba">
        <i class="fa fa-angle-up" aria-hidden="true">
        </i>
    </a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= RUTA_DOMAIN ?>vistas/js/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="<?= RUTA_DOMAIN ?>vistas/js/bootstrap.min.js"></script>
    <script src="<?= RUTA_DOMAIN ?>vistas/js/wow.min.js"></script>
    <script src="<?= RUTA_DOMAIN ?>vistas/js/elevator.js"></script>
    <script src="<?= RUTA_DOMAIN ?>vistas/js/lottie.min.js"></script>
    <script src="<?= RUTA_DOMAIN ?>vistas/js/init.js"></script>

    <script>
        // Elevator script included on the page, already.

        window.onload = function() {
            var elevator = new Elevator({
                element: document.querySelector('.ir-arriba'),
                targetElement: document.querySelector('#header'),
                verticalPadding: 80,
                duration: 1000 
            });
        }
    </script>


</body>

</html>