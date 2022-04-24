<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Recursos favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Fuentes importadas de Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Librerias de iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Librerias de estilos -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{url('/')}}" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-file-signature me-2"></i>Portafolio</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link">Inicio</a>
                    <a href="{{url('/jornalizacion/')}}" class="nav-item nav-link">Jornalización</a>
                    <a href="{{url('/calendarizacion/')}}" class="nav-item nav-link">Calendarización</a>
                    <a href="{{url('/presentacion/')}}" class="nav-item nav-link">Presentación</a>
                    <a href="{{url('/bitacora/')}}" class="nav-item nav-link">Bitacora</a>
                </div>
                <a href="{{url('/conclusiones/')}}" class="btn btn-primary py-2 px-4 ms-3" style="border-radius: 50px;">Conclusiones</a>
            </div>
        </nav>
</body>
</html>