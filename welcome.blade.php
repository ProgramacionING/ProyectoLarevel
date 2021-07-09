<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

        

       
    </head>
    <body class="antialiased">
        
       <nav class="navbar navbar-custom navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header pull-left">
                    <a href="" class="navbar-brand">
                        <span class="brand-logo"><img style="max-width: 30%" src="static/images/utsoe.jpg" alt=""/></span>
                    </a>
                </div>
                <div class="main-nav pull-right">
                    <div class="button_container toggle">
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
                    </div>
                </div>
                <div class="overlay" id="overlay">
                    <nav class="overlay-menu">
                        <ul>
                             @if (Route::has('login'))
                                
                                    @auth
                                        <li><a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a></li>
                                    @else
                                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                        @endif
                                    @endauth
                                
                            @endif
                            
                        </ul>
                    </nav>
                </div>
            </div><!-- /container -->
    </nav>
    <!-- /Navigation -->


    <!-- Intro -->
    <div id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 pull-right">
                        <h1 class="home-heading wow fadeInUp animated">A designer knows he has achieved perfection not when there is nothing left to add, but when <span>there is nothing left to take away.</span></h1>
                        <div class="text-home wow fadeInUp animated"><strong>Simplify, simplify</strong></div>
                        
                    </div>
                </div>
            </div>
    </div>
    <!-- /Intro -->
    
        
    <!-- Main Banner -->
    <div class="container">
         <div class="row">
           <div class="banner">
             <div class="vertical-text"><p style="color: black; background: white;">Universidad Del Suroreste de Guanajuato</p></div>
             <img src="static/images/historia.jpg" alt=""/>
             </div>
            </div>        
     </div>
     <!-- /Main Banner -->

       
     
    
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
