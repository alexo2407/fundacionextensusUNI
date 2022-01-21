
<header class="encabezado fixed-top wow bg-primary" role="banner" id="menu">

<div class="container navbar  d-flex flex-row align-items-center flex-wrap" id="navbar">

  <a href="inicio" class="logo order-0 order-lg-0">
  <img src="<?=RUTA_DOMAIN?>vistas/img/logo.png">
  </a>

  <button type="button" class="boton-menu order-2 d-lg-none" data-toggle="collapse" data-target="#menu-principal"
    aria-expanded="false">
    <i class="fa fa-bars"></i>
  </button>

  <nav id="menu-principal"
    class="collapse order-4 order-lg-1 flex-sm-grow-1 flex-sm-shrink-1 flex-md-grow-0 flex-md-shrink-1">
    <ul class="navbar-nav d-md-flex flex-md-column d-lg-flex flex-lg-row ">
        <li class="nav-item">
            <a href="inicio">Inicio</a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Analítica Avanzada
            </a>
            <ul class="dropdown-menu">
                <li><a href="objetivosAnalitica" class="dropdown-item">Descripción y Objetivos
                        del Curso</a></li>
                <li><a href="instructoresAnalitica" class="dropdown-item">Instructores</a></li>
                <li> <a href="pagosAnalitica" class="dropdown-item">Pagos</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="serlumen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Inteligencia de Negocios
            </a>
            <ul class="dropdown-menu">
                <li><a href="objetivosInteligencia" class="dropdown-item">Descripción y Objetivos
                        del Curso</a></li>
                <li><a href="instructoresInteligencia" class="dropdown-item">Instructores</a></li>
                <li> <a href="pagosInteligencia" class="dropdown-item">Pagos</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="contacto">Contactanos</a>
        </li>
        <li class="nav-item">
            <a href="proyectos">Proyectos</a>
        </li>
    </ul>
  </nav>
</div>
</header><!-- /header -->

