<header class="encabezado bg-primary" role="banner" id="menu">
    <!-- Menu -->

    <?php include "vistas/partes/menu.php"; ?>
    <!--cierre de barra-->

</header>


<main id="principal">
    <div class="container contenido">
        <div class="row">
            <!-- Accordion -->
            <div class="contenido-1 col-md-8" id="accordion-style-1">
                <section>
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-green mb-4">Descripción del Posgrado y Cursos</h1>
                        </div>
                        <div class="col-12 mx-0">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="accordion-button btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Posgrado en Inteligencia Artificial.
                                            </button>

                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-justify mt-4">El Posgrado en Inteligencia Artificial de la UNI es un programa especializado de Ciencia de Datos
                                                e Inteligencia Artificial con metodología 100% virtual (SINCRÓNICO), modular y ejecutivo. Además, abierto
                                                a cualquier persona interesada en adquirir estas habilidades, independientemente de su ubicación geográfica y/o profesionalismo.<br /><br />
                                                El propósito de esta especialidad es dotar a nuestros estudiantes de estas herramientas técnicas que son necesarias
                                                para convertirse en un Científico de Datos (Data Scientist), capaz de hacer análisis
                                                aplicando los diferentes conocimientos y herramientas de Analítica Avanzada,
                                                Predictiva, en la toma de Decisiones Gerenciales y Aprendizaje Avanzado en Big Data.<br /><br />
                                                Este programa educativo es practico, está diseñado para que cualquier profesional, sea de la
                                                especialidad de Inteligencia Artificial o de otra profesión, pueda adquirir estos conocimientos técnicos y los pueda aplicar
                                                en cualquier ámbito. Se fundamenta en el principio de <b>aprender haciendo</b>, por lo que este plan de estudio
                                                se enfoca en la metodología de estudios de casos.<br /><br />
                                            </p>
                                            <h4 class="mt-4"><strong>Objetivos</strong></h4>

                                            <ul class="list-group mt-4">
                                                <li class="list-group-item">Proporcionar los fundamentos teóricos y prácticos para que sea capaz de proponer
                                                    y desarrollar soluciones de Analítica Avanzada.</li>
                                                <li class="list-group-item">Solucionar problemas complejos utilizando Algoritmos, Técnicas y Herramientas de la Inteligencia
                                                    Artificial con el fin de adquirir autonomía en dichos campos.</li>
                                                <li class="list-group-item">Desarrollar proyectos de Inteligencia Artificial de principio a fin.</li>
                                            </ul>

                                            <h4 class="mt-4"> <strong>Requisitos de Admisión</strong></h4>
                                            <p class="text-justify mt-4">Para ser candidato a este Posgrado, los estudiantes deben de cumplir
                                                con los siguientes requisitos:
                                            </p>
                                            <ul class="list-group mt-4 mb-4">
                                                <li class="list-group-item">Conocimientos Intermedios o Avanzados de Power BI.</li>
                                                <li class="list-group-item">Conocimientos Estadísticos.</li>
                                                <li class="list-group-item">Conocimientos de Análisis de Datos.</li>
                                            </ul>
                                            <div class="col mb-4">
                                                <a href="<?= RUTA_DOMAIN ?>vistas/documents/Psg_IA.pdf" class="btn btn-primary  w-100" target="_blank">Descargar Pensum <i class="fa fa-download"></i></a>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Analítica Avanzada con Power BI, R y Python.
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-justify mt-4">Inicie su carrera profesional como Científico de Datos (Data Scientist)
                                                y
                                                mejore sus técnicas de minería de datos con este curso especializado. En este curso aprenderá a
                                                optimizar el modelado y preparación de sus datos para aplicar distintos algoritmos de análisis
                                                predictivo. Aplicará tanto modelos de regresión como de clasificación y series temporales,
                                                usando
                                                Power BI como herramienta de análisis y visualización y los lenguajes R y Python para análisis
                                                predictivo. No solo aprenderá a ejecutar Analítica Avanzada y Predictiva,
                                                sino
                                                que tendrá la habilidad de comunicar sus conclusiones a cualquier audiencia usando técnicas de
                                                "Data
                                                Storytelling".<br /><br />
                                                "La era digital requiere analistas de datos en cada profesión, en cada proceso, en cada decisión y en cada acción"<br />Garther
                                            </p>

                                            <h4 class="mt-4"><strong>Objetivos</strong></h4>

                                            <ul class="list-group mt-4">
                                                <li class="list-group-item">Describir terminologías asociadas al lenguaje R, Python y Power BI
                                                    para
                                                    Analítica Avanzada.</li>
                                                <li class="list-group-item">Aplicar conocimientos sobre Análisis Predictivos e Inferencia
                                                    Estadística.</li>
                                                <li class="list-group-item">Implementar Modelos de Regresión, Clasificación, Clúster y Series
                                                    Temporales.</li>
                                                <li class="list-group-item">Utilizar modelos predictivos en escenarios reales.</li>
                                                <li class="list-group-item">Modelar y preparar datos para Analítica Avanzada y Predictiva.</li>
                                                <li class="list-group-item">Informar de forma efectiva los resultados a cualquier audiencia
                                                    (técnica
                                                    o no técnica).</li>
                                                <li class="list-group-item">Desarrollar proyectos de Analítica Avanzada de principio a fin.</li>
                                            </ul>
                                            <h4 class="mt-4"><strong>Requisitos de Admisión</strong></h4>
                                            <p class="text-justify mt-4">Para ser candidato para este curso, los estudiantes deben de cumplir
                                                con los siguientes requisitos:
                                            </p>
                                            <ul class="list-group mt-4 mb-4">
                                                <li class="list-group-item">Conocimiento intermedio o avanzado de Power BI: modelado de datos en
                                                    Power Query, conocimientos
                                                    de DAX, edición de gráficas y filtros.</li>
                                            </ul>
                                            <div class="col mb-4">
                                                <a href="<?= RUTA_DOMAIN ?>vistas/documents/A_A_BI_R_Python.pdf" class="btn btn-primary w-100" target="_blank" style="color: #fffff;">Descargar Pensum <i class="fa fa-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Analítica Predictiva y Machine Learning con R, Python y Databricks.
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-justify mt-4">Considerando las nuevas tendencias del mundo digital que estamos viviendo, ninguna
                                                profesión puede ser ejecutada sin el uso o interpretación de datos, los que son cada vez más abundantes.
                                                En este módulo le ofrecemos la oportunidad de convertirse en un científico de datos (Data Scientist) y mejorar
                                                sus técnicas de analítica predictiva.<br /><br />
                                                Aprenderá a validar la calidad de la información, para su modelación y preparación en aplicar distintos algoritmos
                                                de análisis predictivo con R y Python, así como la plataforma Databricks para Big Data; como modelos de regresión,
                                                clasificación y series temporales. Además, poder interpretar y contrastar los resultados de los distintos modelos
                                                y poder identificar, clasificar e interpretar la mejor solución de analítica predictiva para su proyecto.<br /><br />
                                                En este Curso Especializado de Analítica Predictiva y Machine Learning con R, Python y Databricks, dará valor agregado
                                                a su ejercicio profesional y a su organización, desarrollando sus capacidades de análisis de la información al más alto
                                                nivel, convirtiéndose en un profesional de alto rendimiento.<br /><br />
                                                "La era digital requiere analistas de datos en cada profesión, en cada proceso, en cada decisión y en cada acción"<br />Garther</p>
                                            <h4 class="mt-4"><strong>Objetivos</strong></h4>

                                            <ul class="list-group mt-4">
                                                <li class="list-group-item">Determinar el Ciclo de Vida de un Proyecto de Análisis Predictivo.</li>
                                                <li class="list-group-item">Validar la calidad del Dataset y Preparación de los Datos.</li>
                                                <li class="list-group-item">Desarrollar el Análisis Predictivo con los lenguajes R y Python.</li>
                                                <li class="list-group-item">Realizar Análisis Predictivo sobre Big Data usando la herramienta Databricks.</li>
                                                <li class="list-group-item">Aplicar conocimientos sobre Análisis Predictivo e Inferencia Estadística, así como los Modelos de Regresión, Clasificación, Clúster y en Escenarios Reales.</li>
                                                <li class="list-group-item">Desarrollar Proyectos Completos de Analítica Predictiva utilizando Modelos Reales.</li>
                                            </ul>

                                            <h4 class="mt-4"><strong>Requisitos de Admisión</strong></h4>
                                            <p class="text-justify mt-4">Para ser candidato para este curso, los estudiantes deben de cumplir
                                                con los siguientes requisitos:
                                            </p>
                                            <ul class="list-group mt-4 mb-4">
                                                <li class="list-group-item">Nociones de Estadística.</li>
                                                <li class="list-group-item">Familiaridad con Análisis de Datos (Excel, Power BI, Tableau, etc…).</li>
                                            </ul>
                                            <div class="col mb-4">
                                                <a href="<?= RUTA_DOMAIN ?>vistas/documents/A_P_R_Py_DB.pdf" class="btn btn-primary  w-100" target="_blank">Descargar Pensum <i class="fa fa-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Gerencia con Analítica Avanzada para toma de Decisiones.
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-justify mt-4">Los procesos y gestión de proyectos ya no son realizados en base a planes
                                                estáticos y Project manager jerárquico provocado por la falta de flexibilidad,
                                                competitividad, desmotivación de los equipos y sobrecostes.<br /><br />
                                                Aprenda a usar Minería de Procesos -Process Mining- como una técnica de
                                                extracción de conocimiento que se basa en el análisis de archivos de registros y de
                                                esta manera mejore sus procesos internos. Este método le permite analizar
                                                procesos de negocio y descubrir dónde hay potencial para mejorarlos.<br /><br />
                                                Este curso está dirigido a todo aquel profesional interesado en escalar
                                                profesionalmente a posiciones de media o alta dirección; gerentes de cualquier tipo,
                                                controllers financieros de industria o servicios con el máximo interés de fijar y
                                                optimizar los costes respecto a los procesos físicos, ingenieros de mejora,
                                                ingenieros de procesos actuales de servicios (banca, seguros, E-commerce) o
                                                industriales.<br /><br />
                                                Por un costo adicional, se incluye dos Certificaciones Profesionales Internacionales Avaladas por <b>AENOR</b> según <b>ISO 18404</b>:
                                                <b>Lean Scrum Master</b> y <b>Lean Agile Team Worker</b>.
                                            </p>

                                            <h4 class="mt-4"><strong>Objetivos</strong></h4>

                                            <ul class="list-group mt-4">
                                                <li class="list-group-item">Conocimiento de Técnicas y Gestión Básica Lean Management.</li>
                                                <li class="list-group-item">Métricas Lean Management, Make To Market, Lead Time, Tiempo de Ciclo, Takt Time.</li>
                                                <li class="list-group-item">Modelos de Tablas combinadas mediante casos reales.</li>
                                                <li class="list-group-item">Paneles de Gestión SDCA y PDCA.</li>
                                                <li class="list-group-item">Modelos de Resolución de Problemas 8D´s.</li>
                                                <li class="list-group-item">Conocimiento de Scrum Técnico.</li>
                                                <li class="list-group-item">Marco Organizativo de Scrum Técnico.</li>
                                                <li class="list-group-item">Introducción a Minería de procesos y análisis de Cadenas de Valor (VSM).</li>
                                                <li class="list-group-item">Entender la relación de la minería de procesos con la cuenta de resultados.</li>
                                            </ul>

                                            <h4 class="mt-4"> <strong>Requisitos de Admisión</strong></h4>
                                            <p class="text-justify mt-4">Para ser candidato para este curso, los estudiantes deben de cumplir
                                                con los siguientes requisitos:
                                            </p>
                                            <ul class="list-group mt-4 mb-4">
                                                <li class="list-group-item">Familiaridad con Entornos de Trabajo Microsoft 365 Colaborativos (Excel, Power BI, Visio, Teams, etcétera).</li>
                                                <li class="list-group-item">Experiencia en Análisis de Datos.</li>
                                                <li class="list-group-item">Fundamentos de Analítica Avanzada de Datos.</li>
                                            </ul>
                                            <div class="col mb-4">
                                                <a href="<?= RUTA_DOMAIN ?>vistas/documents/G_A_T_D.pdf" class="btn btn-primary  w-100" target="_blank">Descargar Pensum <i class="fa fa-download"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>Ingeniería de Big Data.
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse fade" aria-labelledby="collapseFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-justify mt-4">La humanidad genera datos a un ritmo exponencial y los sistemas tradicionales de
                                                bases de datos no son suficientes para almacenar esta cantidad. Hemos entrado en la era del llamado "Big Data",
                                                con sistemas de almacenamiento distribuido y tablas de miles de millones o billones de registros, altamente cambiantes
                                                del mundo digital moderno.<br /><br />
                                                En este curso aprenderá las técnicas de almacenamiento distribuido con la ultima tecnología, podrá realizar análisis de
                                                <b>extracción-transformación-carga</b> e interpretación de grandes cantidades de datos.<br /><br />
                                                Los sistemas de Big Data son enormes, en análisis de redes sociales, gestión de telemetría, análisis de documentos visuales,
                                                videos o texto no estructurado y sistemas de aplicaciones de inteligencia artificial en tiempo real.<br /><br />
                                                En este curso aprenderá cómo funcionan los modelos de almacenamiento de datos NoSQL y como realizar un
                                                proceso completo de diseño de un data-lake, dejando atrás los modelos tabulares.<br /><br />
                                            </p>

                                            <h4 class="mt-4"><strong>Objetivos</strong></h4>

                                            <ul class="list-group mt-4">
                                                <li class="list-group-item">Que es Big Data, como funciona y para qué sirve.</li>
                                                <li class="list-group-item">Gestión de la calidad de datos.</li>
                                                <li class="list-group-item">Múltiples Sistemas de Almacenamiento de Datos No Estructurados.</li>
                                                <li class="list-group-item">Extracción-Transformación-Carga / Extracción-Carga-Transformación.</li>
                                                <li class="list-group-item">Bases de Datos Documentales / NoSQL.</li>
                                                <li class="list-group-item">Proceso de Limpieza de Datos.</li>
                                                <li class="list-group-item">Infraestructura de Big Data.</li>
                                            </ul>

                                            <h4 class="mt-4"> <strong>Requisitos de Admisión</strong></h4>
                                            <p class="text-justify mt-4">Para ser candidato para este curso, los estudiantes deben de cumplir
                                                con los siguientes requisitos:
                                            </p>
                                            <ul class="list-group mt-4 mb-4">
                                                <li class="list-group-item">Conocimientos avanzados de SQL, R y Python.</li>
                                                <li class="list-group-item">Sólidos conocimientos de Modelado Estadístico y Aprendizaje Automático.</li>
                                                <li class="list-group-item">Sólidos conocimientos en Analítica Avanzada.</li>
                                            </ul>
                                            <div class="col mb-4">
                                                <a href="<?= RUTA_DOMAIN ?>vistas/documents/I_B_D_H_Sp.pdf" class="btn btn-primary  w-100" target="_blank">Descargar Pensum <i class="fa fa-download"></i> </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h4 class="mt-4"> <strong>Campos de Aplicación</strong></h4>
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
                <img src="<?= RUTA_DOMAIN ?>vistas/img/pp0.png" alt="" class="img-fluid">
                <br />
                <br />
                <img src="<?= RUTA_DOMAIN ?>vistas/img/pp1.png" alt="" class="img-fluid">
                <br />
                <br />
                <img src="<?= RUTA_DOMAIN ?>vistas/img/pp2.png" alt="" class="img-fluid">
                <br />
                <br />
                <img src="<?= RUTA_DOMAIN ?>vistas/img/pp3.png" alt="" class="img-fluid">
                <br />
                <br />
                <img src="<?= RUTA_DOMAIN ?>vistas/img/pp4.png" alt="" class="img-fluid">
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
                <img src="<?= RUTA_DOMAIN ?>vistas/img/cert_int.png" alt="Certificado de Aprobado" class="img-fluid">
            </div>
            <div>

            </div>
        </div>

        <div class="div-block"></div>
    </div>
</main>

<?php include "vistas/partes/footer.php"; ?>