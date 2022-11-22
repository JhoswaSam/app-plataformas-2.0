@extends('layouts.head')

@section('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Font Awesome Icons CSS 
    <link rel="stylesheet" href="css/font-awesome.min.css">-->

    <!-- Magnific-popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">

@endsection

@section('menu-active')
    <li><a href="/">Inicio</a></li>
    <li><a href="/about">Nosotros</a></li>
    <li><a href="/services">Ongs</a></li>
    <li class="active"><a href="/contact">Contactenos</a></li>
    
        @if (Route::has('login'))   
            @auth
                @if ($user->usuario)
                    <li>
                        <a href="{{ url('/dashboard') }}">{{ __('Dashboard') }}</a>
                    </li>
                @else
                    <li>
                        <a href="{{ url('/profile/client') }}">{{ __('Perfil') }}</a>
                    </li>
                
                    <!-- Authentication -->
                    <li>
                        <form style="margin-top: 20%" method="POST" action="{{ url('/logout2') }}" x-data>
                            @csrf
                            <a href="{{ url('/logout2') }}" @click.prevent="$root.submit();">{{ __('Salir') }}</a>
                        </form>
                    </li>

                @endif
            @else
                <li>
                    <a href="{{ route('login') }}" >Iniciar Sesión</a>
                </li>

            @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" >Registrarse</a>
                </li>
            @endif

            @endauth
        @endif
    
    
@endsection

@section('contenido')

    <!-- Home Section -->

    <section id="home" class="main-contact">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h1 class="wow fadeInUp head" data-wow-delay="0.6s">Contactenos</h1>
                    <p class="wow fadeInUp lr-pd" data-wow-delay="0.8s">Si tiene algun comentario o queja o quiere trabajar con nosotros llene este formulario y nosotros esteremos en contacto con usted lo mas antes posible.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- Contact Section -->

    <section id="contact">
        <div class="container">
            <div class="row">
                
                <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
                    <div class="contact-detail">

                        <div class="contact-detail-1">
                            <h3>Cusco</h3>
                            <p class="small">Urb. Ingeniería Larapa Grande A-7</p>
                            <p class="small">+51 999 999 999 / +51 999 999 998</p>
                            <p class="small">service@tabacoychannel.com</p>
                        </div>

                    </div>
                </div>

                <div class="wow fadeInUp col-md-8 col-sm-8" data-wow-delay="0.4s">
                    <form action="contact.php" method="post">
                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Nombre" required>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" placeholder="Correo" required>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="tel" class="form-control" placeholder="Tu telefono" required>
                            <textarea class="form-control" placeholder="Tu mensaje" rows="6" required></textarea>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <input type="submit" class="form-control" value="Enviar">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>


@endsection

@section('js')

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>

@endsection
