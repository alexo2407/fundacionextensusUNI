<header class="encabezado bg-primary" role="banner" id="menu">
    <?php include "vistas/partes/menu.php"; ?>

</header>

<main id="principal">
    <div class="container contenido">
        <div class="row">
            <!-- Accordion -->
            <div class="contenido-1 col-md-8" id="accordion-style-1">
                <section>
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-green mb-4">Descripciones de los Cursos</h1>
                        </div>
                        <div class="col-12 mx-0">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="accordion-button btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Inteligencia de Negocios con SQL Server aplicando Power BI.
                                            </button>

                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-justify mt-4">Este curso describe cómo implementar una plataforma de almacenamiento
                                                de datos para apoyar una solución de BI (Business Intelligence). Los estudiantes aprenderán cómo crear
                                                la plataforma con Microsoft SQL Server, implementar un ETL (extracción, transformación, carga) de datos con
                                                SQL Server Integration Services (SSIS), Además Aprenderán Alta Disponibilidad Implementando FileGroups, tendrá
                                                una sola versión de la información que podrá analizarla y compartirla con Power BI.<br /><br />
                                                Este curso está dirigido a aquellos profesionales de bases de datos que necesiten aprender a crear y sostener
                                                una plataforma de almacenamiento de datos. Aporta no sólo las nuevas características de SQL Server, sino
                                                también las principales capacidades que ofrece la plataforma SQL Server.<br /><br />
                                                A partir de allí se desarrollarán conceptos avanzados basados en ejemplos acerca de funcionalidades y formas de
                                                resolver problemáticas complejas con Power BI y DAX.<br /><br />
                                                También se verán las funcionalidades agregadas a Power BI y Power BI Services, además de como conectarse a diversas
                                                fuentes de datos y el uso del Data Gateway en diferentes escenarios.
                                            </p>

                                            <h4 class="mt-4"><strong>Objetivos</strong></h4>

                                            <ul class="list-group mt-4">
                                                <li class="list-group-item">Crear una plataforma de almacenamiento (Data Warehouse) de datos para apoyar una solución de BI.</li>
                                                <li class="list-group-item">Crear Filegroups para alta disponibilidad.</li>
                                                <li class="list-group-item">Crear índices Columnares.</li>
                                                <li class="list-group-item">Crear una solución ETL con SSIS.</li>
                                                <li class="list-group-item">Crear el flujo de control mediante el uso de tareas y restricciones de precedencia.</li>
                                                <li class="list-group-item">Crear paquetes dinámicos que incluyen variables y parámetros.</li>
                                                <li class="list-group-item">Desplegar proyectos SSIS en Microsoft Agent SQL Server.</li>
                                                <li class="list-group-item">Implementar funciones DAX.</li>
                                                <li class="list-group-item">Diseñar Dashboard con Power BI.</li>
                                                <li class="list-group-item">Utilizar Data Gateway para el despliegue de Dashboard en la nube.</li>
                                            </ul>

                                            <h4 class="mt-4"> <strong>Requerimientos</strong> </h4>
                                            <p class="text-justify mt-4">Para ser candidato para este curso, los estudiantes deben de cumplir
                                                con los siguientes requisitos:
                                            </p>
                                            <ul class="list-group mt-4 mb-4">
                                                <li class="list-group-item">Conocimientos básicos en Diseño y Modelado de Bases de Datos Relacionales.</li>
                                                <li class="list-group-item">Manejo de las herramientas de consulta.</li>
                                                <li class="list-group-item">Conocimientos de Transact SQL.</li>
                                                <li class="list-group-item">Conocimientos básicos de Power BI Básico.</li>
                                            </ul>
                                            <div class="col mb-4">
                                                <a href="<?= RUTA_DOMAIN ?>vistas/documents/I_N_SQL_A_PBI.pdf" class="btn btn-primary  w-100" target="_blank">Descargar Pensum <i class="fa fa-download"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Administración de Bases de Datos con SQL Server 2019.
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-justify mt-4">
                                                Este curso está dirigido a profesionales de IT que administran y mantienen bases de datos SQL Server,
                                                realizan mantenimiento y administración de bases de datos como su principal área de responsabilidad,
                                                o trabajan en ambientes donde las bases de datos juegan un papel clave en sus empresas.
                                                Adicionalmente también está dirigido a profesionales que desarrollan aplicaciones que ofrecen contenido de bases de datos SQL Server.
                                            </p>

                                            <h4 class="mt-4"><strong>Objetivos</strong></h4>

                                            <ul class="list-group mt-4">
                                                <li class="list-group-item">Instalar y Configurar Windows Server 2019 Con Controlador de Dominio en Entorno Virtualizado.</li>
                                                <li class="list-group-item">Instalar y Configurar SQL Server 2019 en Entorno Virtualizado.</li>
                                                <li class="list-group-item">Trabajar con Modelos de Recuperación, Bases de Datos y Almacenamiento.</li>
                                                <li class="list-group-item">Planificar e Implementar Estrategias de Respaldos.</li>
                                                <li class="list-group-item">Restaurar Bases de Datos SQL Server.</li>
                                                <li class="list-group-item">Dar Seguimiento a la Actividad de Servidor SQL.</li>
                                                <li class="list-group-item">Gestionar la Seguridad de SQL Server.</li>
                                                <li class="list-group-item">Configurar SQL Server Database Mail.</li>
                                                <li class="list-group-item">Automatizar el mantenimiento de SQL Server con SQL Server Agent Jobs.</li>
                                                <li class="list-group-item">Dar Seguimiento a SQL Server mediante el Uso de Alertas y Notificaciones.</li>
                                                <li class="list-group-item">Implementar recuperación Ante desastres: Espejo, Replica, Log Shopping.</li>
                                                <li class="list-group-item">Implementar solución <a href="https://ola.hallengren.com/" target="_blank">Ola Hallengren</a>.</li>
                                            </ul>
                                            <h4 class="mt-4"><strong>Requerimientos</strong></h4>

                                            <p class="text-justify mt-4">Para ser candidato para este curso, los estudiantes deben de cumplir
                                                con los siguientes requisitos:
                                            </p>
                                            <ul class="list-group mt-4 mb-4">
                                                <li class="list-group-item">Conocimientos básicos en Diseño y Modelado de Bases de Datos Relacionales.</li>
                                                <li class="list-group-item">Conocimientos de Transact SQL.</li>
                                            </ul>
                                            <div class="col mb-4">
                                                <a href="<?= RUTA_DOMAIN ?>vistas/documents/Admon_SQL.pdf" class="btn btn-primary  w-100" target="_blank">Descargar Pensum <i class="fa fa-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Hacking Ético y Ciberseguridad.
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-justify mt-4">Es importante mencionar que todos los días hay amenazas nuevas y emergentes en el mundo cibernético
                                                que se dirigen a cada segundo a diferentes empresas, estas amenazas son un riesgo para la información y la continuidad del negocio,
                                                la ciberdelincuencia se está convirtiendo en una preocupación importante para todas las organizaciones, la confiabilidad, integridad
                                                y disponibilidad están en riesgo.<br /><br />
                                                Es necesario tener los conocimientos de hacking ético para proteger nuestra información y que esas amenazas no
                                                se conviertan en ataques concretados.<br /><br />
                                                Por lo tanto, este curso es en su mayoría practico con enfoques teóricos que son la bases de las demostraciones y clases. Utilizaremos
                                                un ambiente controlado con máquinas virtuales implementadas en VMWARE Workstation y las herramientas necesarias para llevar a cabo las
                                                clases prácticas.<br /><br />
                                                Este curso está dirigido a las diferentes áreas de conocimientos vinculadas o relacionadas con el hacking ético.
                                            <ul>
                                                <li>Estudiantes de carreras afines a computación, sistemas y electrónica que desean enriquecer sus conocimientos en el tema de seguridad.</li>
                                                <li>Profesionales en el área de informática que desean adquirir y actualizar sus conocimientos en la hacking ético y seguridad.</li>
                                            </ul>
                                            </p>

                                            <h4 class="mt-4"><strong>Objetivos</strong></h4>

                                            <ul class="list-group mt-4">
                                                <li class="list-group-item">Reconocer las principales amenazas informáticas y vulnerabilidades a nivel de infraestructuras de redes e Internet.</li>
                                                <li class="list-group-item">Crear sus propias amenazas con un principio ético para probar su entorno y comprobar que tan vulnerable puede ser.</li>
                                                <li class="list-group-item">Ser capaz de reconocer y analizar las técnicas de hacking y recopilación de información etc.</li>
                                                <li class="list-group-item">Ser capaz de detectar puntos débiles en su organización.</li>
                                                <li class="list-group-item">Conocer herramientas de análisis de vulnerabilidades y escaneo.</li>
                                            </ul>

                                            <h4 class="mt-4"><strong>Requerimientos</strong></h4>
                                            <p class="text-justify mt-4">Para ser candidato para este curso, los estudiantes deben de cumplir
                                                con los siguientes requisitos:
                                            </p>
                                            <ul class="list-group mt-4 mb-4">
                                                <li class="list-group-item">Conocimientos básicos de Windows.</li>
                                                <li class="list-group-item">Conocimientos básicos en Máquinas Virtuales.</li>
                                                <li class="list-group-item">Conocimientos básicos de Linux.</li>
                                                <li class="list-group-item">Muy importante contar con los deseos de aprender y participar en las clases y así
                                                    todos compartimos esos conocimientos y enriquecemos nuestros conocimientos.</li>
                                            </ul>
                                            <div class="col mb-4">
                                                <a href="<?= RUTA_DOMAIN ?>vistas/documents/H_E_C_S.pdf" class="btn btn-primary  w-100" target="_blank">Descargar Pensum <i class="fa fa-download"></i></a>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-12">
                            <h4 class="mt-4"><strong>Campos de Aplicación</strong></h4>
                            <p class="text-justify mt-4">Al finalizar este curso especializado, el estudiante será capaz de:</p>

                            <ul class="list-group mt-4">
                                <li class="list-group-item">Finanzas / Contabilidad.</li>
                                <li class="list-group-item">Auditoría Interna / Control de Cumplimiento.</li>
                                <li class="list-group-item">Banca y Mercados Financieros.</li>
                                <li class="list-group-item">Gestión de Ventas, Compras e Inventario.</li>
                                <li class="list-group-item">Marketing Convencional y Digital.</li>
                                <li class="list-group-item">Análisis de Redes Sociales.</li>
                                <li class="list-group-item">Recursos Humanos.</li>
                                <li class="list-group-item">Cadena de Suministros.</li>
                                <li class="list-group-item">Distribución Retail y Mayorista.</li>
                                <li class="list-group-item">Modelación e Interpretación de Big Data para la toma de Decisiones
                                    Empresariales, entre otros.</li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <p class="text-justify mt-4">La Universidad Nacional de Ingeniería UNI, Nicaragua. Es miembro de la
                                <strong>Confederación Superior
                                    Universitaria Centroamericana y del Caribe – CSUCA</strong>. Organización regional de la
                                sociedad
                                centroamericana y del Caribe que integran a 20 universidades.
                            </p>
                            <p class="text-justify">www.csuca.org UNI también es miembro de la <strong> Asociación de
                                    Universidades Iberoamericana de Postgrado –
                                    AUIP.</strong> Organismo internacional no gubernamental reconocido por la UNESCO, dedicada
                                al fomento de los
                                estudios de postgrado y doctorado en Iberoamérica, que integra a 236 prestigiosas universidades.
                                <a href="https://www.auip.org/es/" style="color: #062470;" target="_blank">www.auip.org.</a>
                            </p>
                            <p class="text-justify"> La Universidad Nacional de Ingeniería UNI, está acreditada como Dirección
                                Regional para
                                Centroamérica y Nicaragua de Asociación de <strong>Universidades Iberoamericana de Postgrado –
                                    AUIP</strong>, a
                                través de la Dirección de Estudios de Posgrado y Educación Continua</p>
                        </div>
                    </div>
                </section>
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
                <br />
                <br />
                <img src="<?= RUTA_DOMAIN ?>vistas/img/cert_nac.png" alt="" class="img-fluid">
            </div>
            <div>

            </div>
        </div>

        <div class="div-block"></div>
    </div>
</main>


<?php include "vistas/partes/footer.php"; ?>