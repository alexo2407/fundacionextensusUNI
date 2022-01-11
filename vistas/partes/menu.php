<!-- <nav class="navbar">
    <div class="logo nav-logo">
        <img src="vistas/img/logo.png" alt="">
    </div>
    <ul class="nav-menu">
        <li class="nav-item">
            <a href="inicio" class="nav-link">Inicio</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Analítica Avanzada</a>
            <ul class="dropdown">
                <li>menu1</li>
                <li>menu2</li>
                <li>menu3</li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Inteligencia de Negocios</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Contacto</a>
        </li>
    </ul>

     este es el icono de barritas tipo hamburguesa -->

<!-- <div class="iconbar">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

</nav>termna el navbar -->


<!-- <div class="barra bg-success">
    <div class="container">

        <nav class="navbar bg-transparent navbar-dark navbar-expand-lg">

            <a href="inicio" class="navbar-brand"><img src="vistas/img/logo.png" alt=""></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Mostrar Navegación">
                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav w-100 justify-content-end">
                    <li class="nav-item">
                        <a href="inicio" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="submenuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Analítica Avanzada
                        </a>
                        <div class="dropdown-menu" aria-labelledby="submenuDropdown">
                            <a href="objetivosAnalitica" class="dropdown-item">Descripción y Objetivos
                                del Curso</a>
                            <a href="perfilAnalitica" class="dropdown-item">Perfil del Graduado</a>
                            <a href="instructoresAnalitica" class="dropdown-item">Instructores</a>
                            <a href="pagoAnalitica" class="dropdown-item">Pagos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="submenuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Inteligencia de Negocios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="submenuDropdown">
                            <a href="objetivosinteligencia" class="dropdown-item">Descripción y Objetivos
                                del Curso</a>
                            <a href="perfilInteligencia" class="dropdown-item">Perfil del Graduado</a>
                            <a href="instructoresInteligencia" class="dropdown-item">Instructores</a>
                            <a href="pagoInteligencia" class="dropdown-item">Pagos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="contacto" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
 </div>  -->



<div class="container navbar  d-flex flex-row align-items-center flex-wrap" id="navbar">

    <a href="inicio" class="logo order-0 order-lg-0">
        <img src="<?=RUTA_DOMAIN?>vistas/img/logo.png">
    </a>

    <button type="button" class="boton-menu order-2 d-lg-none" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
        <i class="fa fa-bars"></i>
    </button>


    <nav id="menu-principal" class="collapse order-4 order-lg-1 flex-sm-grow-1 flex-sm-shrink-1 flex-md-grow-0 flex-md-shrink-1">
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
                    <!-- <li><a href="perfilAnalitica" class="dropdown-item">Perfil del Graduado</a></li> -->
                    <li><a href="instructoresAnalitica" class="dropdown-item">Instructores</a></li>
                    <li> <a href="pagosAnalitica" class="dropdown-item">Pagos</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="index.html" class="nav-link dropdown-toggle" id="serlumen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Inteligencia de Negocios
                </a>
                <ul class="dropdown-menu">
                    <li><a href="objetivosInteligencia" class="dropdown-item">Descripción y Objetivos
                            del Curso</a></li>
                    <!-- <li><a href="perfilInteligencia" class="dropdown-item">Perfil del Graduado</a></li> -->
                    <li><a href="instructoresInteligencia" class="dropdown-item">Instructores</a></li>
                    <li> <a href="pagosInteligencia" class="dropdown-item">Pagos</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="contacto">Contactanos</a>
            </li>
        </ul>
    </nav>

</div>