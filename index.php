<?php
    session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.html');
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Academy Dates</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets2/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="assets2/css/leadmark.css">
</head>
<a id="scroll"><span></span></a>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand">
                <img src="./cosas/logo.png" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Integrantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mapa">Mapa</a>
                    </li>
                    <?php
                        if (!isset($_SESSION['nombre'])) {
                            echo "<li class='nav-item'>
                                    <a href='login.html' class='ml-4 nav-link btn btn-primary btn-sm rounded'>Iniciar Sesión</a>
                                </li>
                                <li class='nav-item'>
                                    <a href='register.html' class='ml-4 nav-link btn btn-primary btn-sm rounded'>Registrarse</a>
                                </li>";
                        } else {
                            echo "<li class='nav-item'>
                                    <a href='cerrar.php' class='ml-4 nav-link btn btn-primary btn-sm rounded'>Cerrar Sesión</a>
                                </li>";
                        }
                    ?>

                    <!-- <li class="nav-item">
                        <a href="login.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">Iniciar Sesión</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a href="register.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">Registrarse</a>
                    </li> -->
                    <!-- <li>
                        <div class="container">
                            <input class="container_toggle" type="checkbox" id="switch" name="mode">
                            <label for="switch">Toggle</label>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="title">Academy Dates</h1>
            <?php
                if(isset($_SESSION['nombre'])) {
                    echo "<h1 class='subtitle'>
                            ¡Bienvenido/a, " . $_SESSION['nombre'] . "!
                        </h1>";
                }
            ?>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <!-- Service Section -->
    <!-- <section  id="service" class="section pt-0">
        <div class="container ">
            <h6 class="section-title text-center"></h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">Voluptates architecto provident deserunt.</h6>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold text-center">:)</small>
                            <h5 class="card-title mt-3"><h5>
                            <p class="mb-0">NO PIERDAS MATERIAS, COMUNICATEE</p>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </section> -->
    <!-- End OF Service Section -->
<br>
    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6 class="section-title mb-0">Sobre nosotros</h6> <br>
                    <!-- <h6 class="section-subtitle mb-4">Architecto provident deserunt</h6> -->
                    <p class="simple-text">Somos un portal donde se pueden agendar citas con los docentes, donde los estudiantes se pueden comunicar de manera fácil y rápida.</p>
                    <img src="cosas/sm.png" alt="" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="cosas/sm2.png" alt="" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="cosas/sm3.png"" class="w-100 shadow-sm">
                        </div>
                        <div class="col-12 mt-4 ">
                            <p class="simple-text">En el cuál se puede hacer que el encuentro agendado sea virtual o presencial para hablar de temas, inquietudes o comunicar cualquier situación que se deba realizar o plantear frente a algo.
                            </p>
                            <p class="simple-text"><b>No seas rústico, mejor agenda tu cita.</b><br>
                            </p>
                            <p class="simple-text">Solucionamos los inconvenientes de comunicación entre docentes y estudiantes de la Institución Educativa INEM José Félix de Restrepo.</p>
                        </div>
                    </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Portfolio Section -->

    <!-- Blog Section -->

    <!-- End of Blog Section -->

    <!-- Testmonial Section -->
    <section class="section" id="testmonial">
        <div class="container" id="integrantes">
            <h6 class="section-title text-center mb-0">Integrantes</h6>
            <h6 class="section-subtitle mb-5 text-center"></h6>
            <div class="row" style="justify-content: center;">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="cosas/integrantes/Salve.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Sebastian Monsalve Ramos</h6>
                                    <small class="text-muted mb-0">Back End - Líder</small>     
                                </div>
                            </div>
                            <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="cosas/yo.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Juan Camilo Herrera Chamat</h6>
                                    <small class="text-muted mb-0">Front End - Líder</small>      
                                </div>
                            </div>
                            <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="cosas/integrantes/Andre.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Andre Rivas García</h6>
                                    <small class="text-muted mb-0">Back End</small>        
                                </div>
                            </div>
                            <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="justify-content: center; margin-top: 2rem;">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="cosas/vale.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Valeria Gonzalez Florez</h6>
                                    <small class="text-muted mb-0">Front End</small>        
                                </div>
                            </div>
                            <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="cosas/integrantes/Manu.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Manuela Betancur Miranda</h6>
                                    <small class="text-muted mb-0">Logística</small>        
                                </div>
                            </div>
                            <!-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->

    <!-- Map-->
    <section class="section" id="mapa">
        <div class="map" id="mapa">
            <h6 class="section section-title text-center mb-0" id="mapa">Mapa</h6>
            <h6 class="section-subtitle mb-5 text-center"></h6>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.43260312777!2d-75.57994438523092!3d6.206528795506989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46827f7a881345%3A0xdf94c4d13c76ebb!2sInstituci%C3%B3n%20Educativa%20Inem%20Jos%C3%A9%20F%C3%A9lix%20de%20Restrepo!5e0!3m2!1ses-419!2sco!4v1662495103981!5m2!1ses-419!2sco" width="500" height="350" style="border: 0;" allowfullscreen="true"></iframe>
            <br/>
        </div>
    </section>

            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary" id="footer">
                <a class="mb-0 small" href="cosas/TyCAcademy .pdf">&copy; 2022 Academy Dates. Todos los derechos Reservados </a>     
            </footer>
            <!-- End of Page Footer -->  
        </div>
        
	
	<!-- core  -->
    <script src="assets2/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets2/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets2/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets2/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets2/js/leadmark.js"></script>

</body>
</html>
