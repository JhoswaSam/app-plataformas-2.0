<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="GeTheme">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="icon shortcut " href="img/corazon.png">

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
                  <a href="index.html" class="navbar-brand">TABACO & CHANNEL</a>
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
                        <p class="wow fadeInUp" data-wow-delay="0.4s">El sabio no atesora. Cuanto más ayuda a los demás, más se beneficia. Cuanto más da a los demás, mas obtiene para él.</p>
                        <a href="/about" class="wow fadeInUp btn btn-success" data-wow-delay="0.8s">SABER MAS DE NOSOTROS</a>
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
                            
                            <p class="small">&copy Copyright 2022  Tabaco&Channel - All Rights Reserved</p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

      @yield('js')
    </body>
</html>
