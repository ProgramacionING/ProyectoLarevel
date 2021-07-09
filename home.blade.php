@extends('layouts.app')

@section('content')

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
         <!-- Bootstrap  -->
            <link rel="stylesheet" href="static/css/bootstrap.min.css">
            <!-- Main css  -->
            <link rel="stylesheet" href="static/css/style.css">
            <!-- Animate css -->
            <link rel="stylesheet" href="static/css/animate.css">
            <!-- Google fonts -->
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet'>

        

<body>
       
    </head>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size: 30px; font-family: Roboto">Bienvenido</div>

                <div class="card-body">
                    <p >
                        Hola, En este apartado puedes encontrar foros, blogs y manuales clasificados segun el estilo de carreras que busques, la experiencia de otras personas que escogieron tu mismo camino esta a un clck de distancia. Escoge una carrera en la que estes interesado
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
</div>

                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>


<div class="container grid">
         <div class="row">
         
             <div id="photos"> 
                   <figure class="effect-julia">
                       <a href="">
                        <img src="static/images/photo1.gif" alt="img21"/>
                        <figcaption>
                            <div>
                                <p>CONTADURIA</p>
                                
                            </div>
                        </figcaption>   
                       </a>     
                    </figure>
                    <figure class="effect-julia">
                       <a href="">
                        <img src="static/images/photo2.gif" alt="img21"/>
                        <figcaption>
                            <div>
                                <p>INNOVACION DE NEGOCIOS</p>
                                
                            </div>
                        </figcaption>   
                       </a>     
                    </figure>
                    <figure class="effect-julia">
                       <a href="">
                        <img src="static/images/photo9.jpg" alt="img21"/>
                        <figcaption>
                            <div>
                                <p>TECNOLOGIAS DE LA INFORMACION</p>
                                
                            </div>
                        </figcaption>   
                       </a>     
                    </figure>
                    <figure class="effect-julia">
                       <a href="">
                        <img src="static/images/photo8.jpg" alt="img21"/>
                        <figcaption>
                            <div>
                                <p>MECANICA </p>
                                
                            </div>
                        </figcaption>   
                       </a>     
                    </figure>
                     <figure class="effect-julia">
                       <a href="">
                        <img src="static/images/photo3.gif" alt="img21"/>
                        <figcaption>
                            <div>
                                <p>AGRICULTURA</p>
                                
                            </div>
                        </figcaption>   
                       </a>     
                    </figure>
                    <div class="block">
                    <div class="text">NO ESPERES
                    <p>COMPARTE TU CONOCIMIENTO</p>
                    </div>
                    <a href="projects.html" class="btn ghost-btn">CREAR UN NUEVO HILO</a>
                    </div>
                    <figure class="effect-julia">
                       <a href="">
                        <img src="static/images/photo5.jpg" alt="img21"/>
                        <figcaption>
                            <div>
                                <p>DISEÑO TEXTIL</p>
                                
                            </div>
                        </figcaption>   
                       </a>     
                    </figure>
                    <figure class="effect-julia">
                       <a href="">
                        <img src="static/images/photo6.jpg" alt="img21"/>
                        <figcaption>
                            <div>
                                <p>MANTENIMIENTO </p>
                                
                            </div>
                        </figcaption>   
                       </a>     
                    </figure>
                    <figure class="effect-julia">
                       <a href="">
                        <img src="static/images/photo7.jpg" alt="img21"/>
                        <figcaption>
                            <div>
                                <p>PROCESOS ALIMENTICIOSp>
                                
                            </div>
                        </figcaption>   
                       </a>     
                    </figure>
                    <div class="block1">
                    <div class="text">SRECUERDA SER RESPETUOSO, LA FORMA EN LA QUE TE COMUNICAS HABLA MUCHO DE TI COMO PERSONA
                    </div>
                    <div class="story"><a href="studio.html">CONDICIONES DE USO</a></div>
                    </div>

             </div> <!-- /Masonry -->
         </div><!-- /row -->
     </div><!-- /container -->
     
     <br>


    
     <!-- Footer-->
     <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3">
          </div>
          <div class="col-md-6 col-sm6 section-bg-color">
            <div class="row">
              <div class="col-sm-9">
                <h2>INFO</h2>
                <p>Address: 22 ST. SOUTH, NEW YORK, NY 10019</p>
                <p>Phone: 212-333-4000</p>
                <p>Email: simplestudio@office.com</p>
              </div><!-- /col-sm-9 -->
            </div><!--/row-->
          </div><!-- /col-sm-6 -->
          <div class="col-md-3 col-sm-3 section-bg-color1">
            <div class="row">
              <div class="col-sm-9">
              <h3>Copyright 2017</h3>
              <p class="pull-right"><a href=""><img src="static/images/twitter.png" alt=""/></a></p>
              <p class="pull-right icons-f"><a href=""><img src="static/images/facebook.png" alt=""/></a></p>
              </div><!-- /col-sm-9 -->
            </div><!--/row-->
          </div><!-- /col-sm-3 -->
        </div><!-- /row -->
      </div><!-- /container -->
    </footer><!-- /footer -->   
     
    <!-- jQuery Version 1.11.0 -->
    <script src="static/js/jquery-1.11.0.js"></script>
    <!-- Boostrap JS -->
    <script src="static/js/bootstrap.min.js"></script>
    <!-- Masonry JavaScript -->
    <script src="static/js/masonry.js"></script>
    <!-- Nav JS -->
    <script src="static/js/nav.js"></script>
    <!-- Smooth scroll JS -->
    <script src="static/js/smoothscroll.js"></script>
    <!-- Wow JavaScript -->
    <script src="static/js/wow.js"></script>
    
    <script>
    new WOW().init();
    </script>



    </body>
</html>



@endsection
