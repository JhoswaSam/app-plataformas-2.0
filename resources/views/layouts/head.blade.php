<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="GeTheme">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Tacabo || Channel</title>

        @yield('css')

        <!-- Google Fonts Link -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet" type="text/css">

    </head>

    <body>
      <!-- PRE LOADER -->

      <div class="preloader">
            <div class="sk-spinner sk-spinner-pulse"></div>
      </div>



      <!-- Navigation Section -->

      <div class="navbar navbar-default navbar-static-top " style="padding-top: 0%">
          <div class="container">

              <div class="navbar-header">
                  <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="icon icon-bar"></span>
                      <span class="icon icon-bar"></span>
                      <span class="icon icon-bar"></span>
                  </button>
                  <a href="index.html" class="navbar-brand">MINIML.</a>
              </div>

              <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                      @yield('menu-active')
                  </ul>
              </div>

          </div>
      </div>


      @yield('contenido')

      <!-- CTA Section -->

        <section id="cta" class="bg-gray">
            <div class="container">
                <div class="row">

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                        <p class="wow fadeInUp" data-wow-delay="0.4s">FIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <a href="about.html" class="wow fadeInUp btn btn-success" data-wow-delay="0.8s">LEARN ABOUT US</a>
                    </div>

                </div>
            </div>
        </section>


        <!-- Footer Section -->

        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="footer-copyright">
                            <ul class="social-icon">	
                                <li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="0.2s"></a></li>
                                <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="0.4s"></a></li>
                                <li><a href="#" class="fa fa-linkedin wow fadeInUp" data-wow-delay="0.6s"></a></li>
                                <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="0.8s"></a></li>
                                <li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1s"></a></li>
                            </ul>
                            <p class="small">&copy Copyright 2018  Miniml HTML Template - All Rights Reserved</p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>


        <!-- Back top -->

        <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

      @yield('js')
    </body>
</html>
