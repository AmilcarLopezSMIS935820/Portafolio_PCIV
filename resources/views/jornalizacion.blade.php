<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jornalización</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>
<body>
    @include('separador')
    <div class="container-fluid position-relative p-0">
        @include('nav')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Jornalización</h1>
                    <a href="{{url('/jornalizacion/')}}" class="h5 text-white">Inicio</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{url('/presentacion/')}}" class="h5 text-white">Calendarización</a>
                </div>
            </div>
        </div>
    </div>

        <!-- Jornalización -->
        <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-4">
                <div class="row g-5">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 card" style="min-height: 900px;">
                        <div class="position-relative h-100 table-responsive">
                            <!--<img class="position-absolute w-100 h-90 rounded wow zoomIn" data-wow-delay="0.9s" src="img/jornalizacion.png" style="object-fit: cover;" alt="jornalizacion">-->
                            <table class="table table-bordered border-suceess">
                                <thead>
                                    <h1 class="text-center" style="margin: 20px;">Programación Computacional IV</h1><hr>
                                    <tr>
                                        <th># Semana</th>
                                        <th>Día</th>
                                        <th>Mes</th>
                                        <th>Actividad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>20</th>
                                        <th>Enero</th>
                                        <th>Teoría: Introducción a las librerías Bootstrap y VueJS</th>
                                    </tr>
                                    
                                    <tr>
                                        <th>2</th>
                                        <th>27</th>
                                        <th>Enero</th>
                                        <th>Teoría: Rendering y directivas</th>
                                    </tr>

                                    <tr>
                                        <th>2</th>
                                        <th>28</th>
                                        <th>Enero</th>
                                        <th>Practica: Semana 2</th>
                                    </tr>

                                    <tr>
                                        <th>3</th>
                                        <th>03</th>
                                        <th>Febrero</th>
                                        <th>Teoría: Eventos, clases y estilos en tiempo real</th>
                                    </tr>

                                    <tr>
                                        <th>3</th>
                                        <th>04</th>
                                        <th>Febrero</th>
                                        <th>Practica: Semana 3</th>
                                    </tr>
                                    
                                    <tr>
                                        <th>4</th>
                                        <th>10</th>
                                        <th>Febrero</th>
                                        <th>Teoría: Componentes con VueJS</th>
                                    </tr>

                                    <tr>
                                        <th>4</th>
                                        <th>11</th>
                                        <th>Febrero</th>
                                        <th>Practica: Semana 4</th>
                                    </tr>

                                    <tr>
                                        <th>5</th>
                                        <th>17</th>
                                        <th>Febrero</th>
                                        <th>Teoría: Comunicación entre componentes</th>
                                    </tr>

                                    <tr>
                                        <th>5</th>
                                        <th>17</th>
                                        <th>Febrero</th>
                                        <th>Practica: Semana 5</th>
                                    </tr>

                                    <tr>
                                        <th>6</th>
                                        <th>18-24</th>
                                        <th>Febrero</th>
                                        <th>Primer examen parcial</th>
                                    </tr>

                                    <tr style="background-color: #0992D2;">
                                        <td colspan="4" style="padding: 6px; font-weight:bold; color:white;">
                                            Semana de vacaciones
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>7</th>
                                        <th>03</th>
                                        <th>Marzo</th>
                                        <th>Teoría: Introducción al desarrollo con PHP</th>
                                    </tr>
                                    
                                    <tr>
                                        <th>7</th>
                                        <th>04</th>
                                        <th>Marzo</th>
                                        <th>Practica: Semana 7</th>
                                    </tr>

                                    <tr>
                                        <th>8</th>
                                        <th>10</th>
                                        <th>Marzo</th>
                                        <th>Teoría: Conexión de Base de Datos con Laravel</th>
                                    </tr>

                                    <tr>
                                        <th>8</th>
                                        <th>11</th>
                                        <th>Marzo</th>
                                        <th>Practica: Semana 8</th>
                                    </tr>

                                    <tr>
                                        <th>9</th>
                                        <th>17</th>
                                        <th>Marzo</th>
                                        <th>Teoría: CRUD con Laravel</th>
                                    </tr>
                                    
                                    <tr>
                                        <th>9</th>
                                        <th>18</th>
                                        <th>Marzo</th>
                                        <th>Practica: Semana 9</th>
                                    </tr>

                                    <tr>
                                        <th>10</th>
                                        <th>24</th>
                                        <th>Marzo</th>
                                        <th>Teoría: Sistemas de rutas y controladores</th>
                                    </tr>

                                    <tr>
                                        <th>10</th>
                                        <th>25</th>
                                        <th>Marzo</th>
                                        <th>Practica: Semana 10</th>
                                    </tr>

                                    <tr>
                                        <th>11</th>
                                        <th>31</th>
                                        <th>Marzo</th>
                                        <th>Teoría: Validación de datos</th>
                                    </tr>

                                    <tr>
                                        <th>11</th>
                                        <th>01</th>
                                        <th>Abril</th>
                                        <th>Practica: Semana 11</th>
                                    </tr>

                                    <tr>
                                        <th>12</th>
                                        <th>07</th>
                                        <th>Abril</th>
                                        <th>Teoría: Rest API con Laravel</th>
                                    </tr>

                                    <tr>
                                        <th>12</th>
                                        <th>07</th>
                                        <th>Abril</th>
                                        <th>Practica: Semana 12</th>
                                    </tr>

                                    <tr style="background-color: #0992D2;">
                                        <td colspan="4" style="padding: 6px; font-weight:bold; color:white;">
                                            Vacaciones de semana santa
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>13</th>
                                        <th>18-24</th>
                                        <th>Abril</th>
                                        <th>Segundo examen parcial</th>
                                    </tr>

                                    <tr>
                                        <th>14</th>
                                        <th>28</th>
                                        <th>Abril</th>
                                        <th>Teoría: Introducción a NodeJs</th>
                                    </tr>

                                    <tr>
                                        <th>14</th>
                                        <th>29</th>
                                        <th>Abril</th>
                                        <th>Practica: Semana 14</th>
                                    </tr>

                                    <tr>
                                        <th>15</th>
                                        <th>05</th>
                                        <th>Mayo</th>
                                        <th>Teoría: Asincronismo con NodeJS</th>
                                    </tr>

                                    <tr>
                                        <th>15</th>
                                        <th>06</th>
                                        <th>Mayo</th>
                                        <th>Practica: Semana 15</th>
                                    </tr>
                                    
                                    <tr>
                                        <th>16</th>
                                        <th>12</th>
                                        <th>Mayo</th>
                                        <th>Teoría: Módulos nativos de NodeJS</th>
                                    </tr>

                                    <tr>
                                        <th>16</th>
                                        <th>13</th>
                                        <th>Mayo</th>
                                        <th>Practica: Semana 16</th>
                                    </tr>

                                    <tr>
                                        <th>17</th>
                                        <th>19</th>
                                        <th>Mayo</th>
                                        <th>Teoría: Introducción a Express</th>
                                    </tr>

                                    <tr>
                                        <th>17</th>
                                        <th>20</th>
                                        <th>Mayo</th>
                                        <th>Practica: Semana 17</th>
                                    </tr>

                                    <tr>
                                        <th>18</th>
                                        <th>25</th>
                                        <th>Mayo</th>
                                        <th>Teoría: Bases de datos con NodeJS</th>
                                    </tr>

                                    <tr>
                                        <th>18</th>
                                        <th>26</th>
                                        <th>Mayo</th>
                                        <th>Practica: Semana 18</th>
                                    </tr>

                                    <tr>
                                        <th>19</th>
                                        <th>02</th>
                                        <th>Junio</th>
                                        <th>Teoría: Socket.io</th>
                                    </tr>

                                    <tr>
                                        <th>19</th>
                                        <th>03</th>
                                        <th>Junio</th>
                                        <th>Practica: Semana 19</th>
                                    </tr>

                                    <tr>
                                        <th>20</th>
                                        <th>06-12</th>
                                        <th>Junio</th>
                                        <th>Tercer examen parcial</th>
                                    </tr>

                                    <tr style="background-color: #0992D2;">
                                        <td colspan="4" style="padding: 6px; font-weight:bold; color:white;">
                                            Junio 14 - Presentacion de proyecto
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
        <!-- Fin -->
    <style>
        tbody{
            text-align: center;
            font-family:Arial, Helvetica, sans-serif;
            font-style: normal;
            color: #6D888C;
        }

        thead{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: #0992D2;
        }

        th{
            mask-border-width: 1px;
            padding: 2px;
        }

        tr{
            box-shadow: #6D888C;
        }
    </style>
    @include('footer')
</body>
</html>