@extends('layouts.app2')

@section('content')

<div class="container">


    <p>

        <br>

        <a name="" id="" class="btn btn-primary" href=" {{route('user-detail.create')}} " role="button">Crea tu primer CV <span class="text-dark">GRATIS</span></a><br><br>
        <strong>Open Source </strong>Este es un proyecto creado con LARAVEL por:<br>
        <strong> Back-end Developer: Carlos Monterrosa.<br></strong>
        <!-- <strong>Front-end Developer: Oscar Chan<br></strong> -->
        La intención de esta herramienta es facilitar la creación de un CV.
    <div>
        <!-- <h1>A continuación, un CV de ejemplo</h1> -->
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Carlos Monterrosa</span>
        <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('images/carlos.jpg') }}" alt="..." /></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Acerca de mí</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experiencia</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Educación</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>

        </ul>
    </div>
</nav>

<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                Carlos
                <span class="text-primary">Monterrosa</span>
            </h1>
            <div class="subheading mb-5">
                Corozal Belize,·
                <a href="mailto:name@email.com">carlosmontess07@gmail.com</a>
            </div>
            <p class="lead mb-5">“Soy un desarrollador de software que busca constantemente soluciones innovadoras para los problemas cotidianos. En mis dos años en esta industria, he perfeccionado mi pensamiento analítico y mis habilidades de colaboración, y me encanta trabajar en equipo. También tuve la oportunidad de trabajar como líder de desarrollo de software para dos proyectos con
                Primera tecnología."
            </p>
            <div class="social-icons">
                <!-- <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                <a class="social-icon" href="https://github.com/Carlosm99"><i class="fab fa-github"></i></a>
                <!-- <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a> -->
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <section class="resume-section" id="experience">
        <div class="resume-section-content">
            <h2 class="mb-5">Experience</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Desarrollador web senior</h3>
                    <div class="subheading mb-3">Intelitec Solutions</div>
                    <p>Ponga sobre la mesa estrategias de supervivencia en las que todos ganen para garantizar una dominación proactiva. Al final del día, en el futuro, una nueva normalidad que ha evolucionado desde la generación X está en la pista y se dirige hacia una solución en la nube optimizada. El contenido generado por el usuario en tiempo real tendrá múltiples puntos de contacto para la deslocalización.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Marzo de 2020 - actualidad</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Desarrollador web</h3>
                    <div class="subheading mb-3">Intelitec Solutions</div>
                    <p>Aproveche la fruta madura para identificar una actividad de valor agregado aproximado para la prueba beta. Supere la brecha digital con clics adicionales de DevOps. La inmersión en nanotecnología a lo largo de la autopista de la información cerrará el círculo al centrarse únicamente en el resultado final.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">December 2011 - March 2013</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Diseñador web junior</h3>
                    <div class="subheading mb-3">Shout! Media Productions</div>
                    <p>Podcasting de la gestión del cambio operativo dentro de los flujos de trabajo para establecer un marco. Desconectar los indicadores clave de rendimiento sin interrupciones para maximizar la cola larga. Mantener la vista en la pelota mientras realiza una inmersión profunda en la mentalidad de inicio para derivar la convergencia en la integración multiplataforma.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">
                        Julio de 2020 - diciembre de 2021</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="flex-grow-1">
                    <h3 class="mb-0">
                        Pasantía de Diseño Web</h3>
                    <div class="subheading mb-3">
                        ¡Grito! Producciones de medios</div>
                    <p>Administre de forma colaborativa mercados empoderados a través de redes plug-and-play. Procrastina dinámicamente a los usuarios de B2C después de instalar los beneficios básicos. Visualice de manera espectacular la convergencia dirigida al cliente sin un ROI revolucionario.
                    </p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Septiembre de 2020 - junio de 2021</span></div>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Education-->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Educación</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Instituto Tecnológico de Chetumal: TecNM</h3>
                    <div class="subheading mb-3">LIngeniería en sistemas en tecnologías de la información y comunicaciones </div>
                    <div>
                        Ciencias de la computación - Pista de desarrollo web</div>
                    <!-- <p>GPA: 3.23</p> -->
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Agosto de 2020 - mayo de 2021</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Corozal Community College</h3>
                    <div class="subheading mb-3">Programa de ciencia</div>
                    <!-- <p>GPA: 3.56</p> -->
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Agosto de 2013 - junio de 2017</span></div>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Skills-->
    <section class="resume-section" id="skills">
        <div class="resume-section-content">
            <h2 class="mb-5">Skills</h2>
            <div class="subheading mb-3">Lenguajes de programación y herramientas</div>
            <ul class="list-inline dev-icons">
                <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                <li class="list-inline-item"><i class="fab fa-react"></i></li>
                <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                <li class="list-inline-item"><i class="fab fa-less"></i></li>
                <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                <li class="list-inline-item"><i class="fab fa-linux"></i></li>
                <li class="list-inline-item"><i class="fab fa-aws"></i></li>
                <li class="list-inline-item"><i class="fab fa-node"></i></li>
                <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                <li class="list-inline-item"><i class="fab fa-js"></i></li>
                <li class="list-inline-item"><i class="fab fa-php"></i></li>
            </ul>
            <div class="subheading mb-3">
                Flujo de trabajo</div>
            <ul class="fa-ul mb-0">
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>

                    Diseño receptivo, primero en dispositivos móviles
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>
                    Pruebas y depuración de navegadores cruzados
                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>
                    Equipos multifuncionales

                </li>
                <li>
                    <span class="fa-li"><i class="fas fa-check"></i></span>
                    Desarrollo ágil y Scrum
                </li>
            </ul>
        </div>
    </section>
    <hr class="m-0" />

    <hr class="m-0" />

</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

@endsection