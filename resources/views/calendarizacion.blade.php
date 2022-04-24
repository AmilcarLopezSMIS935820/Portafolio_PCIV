<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Calendarización</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>
<body>
    @include('separador')
    <div class="container-fluid position-relative p-0">
        @include('nav')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Calendarización</h1>
                    <a href="{{url('/jornalizacion/')}}" class="h5 text-white">Jornalización</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{url('/presentacion/')}}" class="h5 text-white">presentación</a>
                </div>
            </div>
        </div>
    </div>

        <!-- Calendarización -->
        <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-4">
                <div class="row g-5">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 card" style="min-height: 1200px; ">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/calendarizacion.jpg" style="object-fit: cover;" alt="calendarizacion">
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
        <!-- Fin -->

    @include('footer')
</body>
</html>