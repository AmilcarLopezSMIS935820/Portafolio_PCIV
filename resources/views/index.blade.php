
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portafolio - SMIS935820</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

</head>

<body>

    @include('separador')


    <!-- Menú y Carrusell -->
    <!-- Intentar optimizar la carga del menu con @-include -->
    <div class="container-fluid position-relative p-0">
        @include('nav')

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/5.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">PRIMER COMPUTO</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Desarrollo Fronted: Boostrap & Vuejs</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">SEGUNDO COMPUTO</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Desarrollo Backend: PHP & Laravel</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">siguiente</span>
            </button>
        </div>
    </div>
    <!-- Fin -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-12 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="ps-4">
                            <h1 class="text-white mb-0">Programación Computacional IV</h1>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Introducción -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
                <div class="container" style="text-align: justify;">
                        <p>En el presente portafolio se abordará las temáticas vistas en el desarrollo de la 
                            asignatura Programación Computacional IV, en donde hasta el momento hemos podido conocer la 
                            esencia del desarrollo web desde varias perspectivas, por ejemplo, desde el Fronted 
                            y el Backend, las cuales explico a continuación: </p>
                        <p>Por parte del Fronted pudimos conocer que esta es la parte de un programa o 
                            dispositivo a la que un usuario puede acceder directamente, por lo tanto, son 
                            todas las tecnologías de diseño y desarrollo web que corren en el navegador y que 
                            se encargan de la interactividad con los usuarios, por ello, acá se crean los 
                            componentes visuales de un sitio web y son los que dan formato a las imágenes, 
                            la animación y la interactividad de un sitio web, siendo por esto que al Fronted 
                            se le conoce como  la parte que corre del lado del cliente. </p>
                        <p>Por otro lado, tenemos al Backend, el cual es la capa de acceso a los datos de un 
                            software o cualquier dispositivo, este no es directamente accesible por los usuarios 
                            ya que contiene la lógica de la aplicación que maneja dichos datos. El Backend 
                            también accede al servidor, siendo este un tipo de aplicación especializada que 
                            entiende la forma en la que el navegador hace solicitudes y peticiones en busca 
                            de información, es por ello, que el Backend se centra en hacer que la lógica del 
                            sitio funcione correctamente, que la información se transmita de manera segura y 
                            que el desempeño de la aplicación no entorpezca la experiencia del usuario, siendo 
                            así que el Backend es la parte que corre del lado del servidor.</p>
                            <br>
                </div>
        </div>
    <hr>
    </div>
        
    <!-- Fin -->



    <!-- Contenidos-->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Contenidos de la asignatura</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1 text-center">Primer Computo</h4>
                            <p class="text-center" style="font-style: italic;">"Desarrollo Fronted con librerías del lado del cliente"</p>
                        </div>
                        <div class="p-5 pt-0">
                            <div class="d-flex justify-content-between mb-3"><span>Introducción a las librerías web: Boostrap y Vuejs.</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>Rendering y directivas.</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>Eventos: Clases y estilos en tiempo real.</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>Componentes.</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>Comunicación entre componentes.</span></div>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1 text-center">Segundo Computo</h4>
                            <p class="text-center" style="font-style: italic;">"Desarrollo Backend del lado del servidor y base de datos"</p>
                        </div>
                        <div class="p-5 pt-0">
                            <div class="d-flex justify-content-between mb-3"><span>Introducción al desarrollo con PHP.</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>Introducción a Laravel: Conexión de Base de Datos con Laravel.</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>CRUD con Laravel.</span></div>
                            <div class="d-flex justify-content-between mb-2"><span>Sistemas de rutas y controladores.</span></div>
                            <div class="d-flex justify-content-between mb-2"><span>Validación de datos.</span></div>
                            <div class="d-flex justify-content-between mb-2"><span>Rest API con Laravel.</span></div>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1 text-center">Tercer Computo</h4>
                            <p class="text-center" style="font-style: italic;">"Incorporando tecnologías de servidor web"</p>
                        </div>
                        <div class="p-5 pt-0">
                            <div class="d-flex justify-content-between mb-3"><span>Introducción, instalación y configuración de Node.js</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>Asincronismo en Node.js</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>Módulos Nativos.</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>Introducción a Express.</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>Servicios de Datos en Node.js con MongoDB.</span></div>
                            <div class="d-flex justify-content-between mb-3"><span>Aplicaciones Real-Time en Node.js con Socket.io</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin -->


    @include('footer')    
</body>

</html>