<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Conclusiones</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>
<body>
    @include('separador')
    <div class="container-fluid position-relative p-0">
        @include('nav')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Conclusiones</h1>
                    <a href="{{url('/bitacora/')}}" class="h5 text-white">Bitacora</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{url('/')}}" class="h5 text-white">Inicio</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Conclusón -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
                <div class="container" style="text-align: justify;">
                        <p>Hoy en día, la programación es un ámbito que no para de crecer, el simple hecho de 
                            desarrollar páginas web, crear aplicaciones y programas que faciliten nuestro día a día 
                            o mejoren la experiencia de los usuarios, son funciones cruciales que desempeñan los 
                            programadores de la actualidad y es que esto es algo que hemos podido aprender al momento 
                            de estar desarrollando los contenidos de esta materia, ya que como programadores 
                            comprendimos que ni el Backend o el Fronted es más importante el uno que el otro, sino que 
                            ambos se complementan y necesitan mutuamente para funcionar, ya que, por una parte, los 
                            sitios web deben ser bonitos y amigables y por otro lado, ese mismo sitio debe ser 
                            funcional y debería poder realizar acciones. </p>
                        <p>Así mismo creo que como grupo hemos comprendido que el trabajado en equipo es muy 
                            fundamental en cualquier proyecto que desarrollemos, ya que, para desarrollar un proyecto 
                            de software se necesitan personas con capacidad creativa y personas con muy buena lógica 
                            para resolver problemas.  </p>
                        <p>En cuanto a este tercer computo y como parte de nuestra formación en el ambiente de NodeJs, 
                            pudimos comprender nueva terminología orientada a la programación asincrónica, la cual es 
                            un estilo de estructurar un programa mediante el cual una llamada a un elemento con alguna 
                            funcionalidad desencadena una acción que puede continuar fuera del flujo continuo del 
                            programa mismo.
                        </p>
                </div>
        </div>
    </div>
        
    <!-- Fin -->

    @include('footer')
</body>
</html>