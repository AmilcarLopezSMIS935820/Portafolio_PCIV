<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Presentación</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>
<body>
    @include('separador')
    <div class="container-fluid position-relative p-0">
        @include('nav')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Presentación</h1>
                    <a href="{{url('/calendarizacion/')}}" class="h5 text-white">Calendarización</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{url('/bitacora/')}}" class="h5 text-white">Bitacora</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Presentacion -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
                <div class="container" style="text-align: justify;">
                        <p>¡Hola¡ Me llamo Josué Amílcar López Benítez y estoy emocionado por contarles un poco
                             acerca de mis experiencias personales sobre la asignatura, pero antes, les contare 
                             un poco sobre mí. Tengo veinte años  y soy un estudiante de la Universidad Gerardo 
                             Barrios, actualmente cursando la carrera de Ingeniería en Sistemas y Redes Informáticas. 
                             Nací en el municipio de Guatajiagua en el departamento de Morazán, pero me crecí en 
                             varios lugares de El Salvador, y fue hace pocos años que regresé de nuevo a mi pueblito 
                             para seguir explorando lo bello de mi ciudad.</p>
                        <p>Para hablar un poco más sobre mí, diré que la programación ha sido gran motivo de la 
                            elección de mi carrera, ya que está me ha gustado mucho desde mi primer contacto con 
                            ella y es que de niño pude observar como se programaban pequeños robots y aplicaciones, 
                            esto me asombro ya que lo veía como un gran logro, así que de forma autodidacta aprendí 
                            un poco de ciertos lenguajes como XML o CSS y no pude buscar más contenido ya que los 
                            recursos eran limitados y las personas de mi ciudad no tenían tanto conocimiento ante 
                            este tema tan complejo, así que me dedique a analizar varias líneas de código que me 
                            encontraba en libros, en donde sinceramente no entendía mucho de lo que se mencionaba, 
                            pero poco a poco iba aprendiendo a razonar y a analizar cada vez mejor las líneas de 
                            código... Se que aún me falta mucho por aprender y eso es lo divertido, puedo seguir 
                            aprendiendo y absorbiendo más y más información y no planeo quedarme con ella, me gustaría 
                            compartirlo con los demás jóvenes que conozco para que ellos puedan motivarse y aunque 
                            sea un poco puedan intentar avanzar en un área que en nuestro municipio está muy poco 
                            vista por la falta de oportunidades u el poco aprovechamiento de esta…</p>
                        <p>En cuanto a mis objetivos académicos para la asignatura, como lo mencione anteriormente, 
                            me gusta mucho el aprender nuevas cosas y hasta el momento todo lo que he visto en esta 
                            asignatura de programación IV realmente me ha interesado y asombrado mucho; Otro de mis 
                            objetivos académicos sería el poder aprender mucho más y poder enseñarle un poco a los 
                            demás jóvenes que quizás no tienen la posibilidad de asistir a la universidad y aun así 
                            siguen queriendo aprender.</p>
                        <p>También y a pesar de que todos los contenidos se han explicado de una forma muy clara y 
                            entendible, debo decir que, los contenidos relacionados con el uso de VueJS me fueron un 
                            poco difíciles de comprender ya que a veces me confundía en muchos términos que se 
                            utilizaban, pero esto me motivo a seguir investigando más del uso de esta librería y en 
                            realidad ha sido muy bueno para mi formación académica y personal. Para el caso de las 
                            dificultades, pues si tuviera que decir algunas, las más relevantes serian que a veces he 
                            tenido problemas con el internet y no me he podido conectar a las conferencias o que 
                            también he tenido que configurar muchas más  cosas de mi computadora para poder seguir el 
                            ritmo de aprendizaje de la asignatura, pero aun así, gracias al apoyo de nuestra docente, 
                            de mis padres y de mis demás compañeros, siento que he podido avanzar mucho y con ello 
                            puedo seguir esforzándome un paso a la vez hasta poder decir que realmente “Soy un gran 
                            programador”.</p>
                </div>
        </div>
    </div>
        
    <!-- Fin -->

    @include('footer')
</body>
</html>