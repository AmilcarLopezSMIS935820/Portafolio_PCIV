<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bitacora</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>
<body>
    @include('separador')
    <div class="container-fluid position-relative p-0">
        @include('nav')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Bitácora</h1>
                    <a href="{{url('/calendarizacion/')}}" class="h5 text-white">Presentación</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{url('/bitacora/')}}" class="h5 text-white">Conclusiones</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Computo I -->
    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-4">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Tareas del primer computo</h5>
                <h1 class="mb-0">Desarrollo Fronted con librerías del lado del cliente.</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Semana 1</h4>
                        <p class="m-0">Introducción y practica de Bootstrap.  Instalación de Vuejs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Semana 2</h4>
                        <p class="m-0">Ejercicios propuestos en clase practica: Directivas Vuejs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">                       
                        <h4 class="mb-3">Semana 3</h4>
                        <p class="m-0">Eventos: Aplicación que captura cada tecla presionada en el teclado.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Semana 4</h4>
                        <p class="m-0">Conversor de unidades con componentes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Semana 5</h4>
                        <p class="m-0">Seguimiento de la Semana 4: Comunicación entre componentes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Parcial Computo I <br>+<br> Repositorio de Practicas</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin -->

    <!-- Computo II -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Tareas del segundo computo</h5>
                <h1 class="mb-0">Desarrollo Backend del lado del servidor y base de datos.</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Semana 7</h4>
                        <p class="m-0">Ejercicio propuesto en clase práctica: Introducción al desarrollo con PHP.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Semana 8</h4>
                        <p class="m-0">Conectando Laravel con una Base de Datos en MySQL.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Semana 9</h4>
                        <p class="m-0">Seguimiento de la semana 8: CRUD con Laravel.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Semana 10</h4>
                        <p class="m-0">Ejercicio propuesto en clase práctica: Uso de Jetstream  y Livewire</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Semana 11</h4>
                        <p class="m-0">Aplicación web con CRUD que valide los campos para estudiantes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Semana 12</h4>
                        <p class="m-0">Consumo y desarrollo de una Rest API para Laravel + Repositorio de prácticas.</p>
                        <a class="btn btn-lg btn-primary rounded" href="https://github.com/AmilcarLopezSMIS935820/Practicas_PCIV" target="_blank">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin -->

    @include('footer')
</body>
</html>