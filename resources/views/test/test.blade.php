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
    <li class="active"><a href="/">Inicio</a></li>
    <li><a href="/about">Nosotros</a></li>
    <li><a href="/services">Ongs</a></li>
    <li><a href="/contact">Contactenos</a></li>
    
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

    <section id="home" class="main">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h1 class="wow fadeInUp head" data-wow-delay="0.6s">Tabaco y Channel</h1>
                    <p class="wow fadeInUp lr-pd" data-wow-delay="0.8s">Es un proyecto de ayuda social donde podras conocer mas de las ongs que se encuentran en la ciudad de cusco que necesitan de tu ayuda para salir adelante.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- Portfolio Section -->

    <section id="portfolio">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">

                    <!-- work section -->
                        <div class="work-section wow fadeInUp" data-wow-delay="1s">

                            <ul class="filter-wrapper clearfix">
                                 <li><a href="#" data-filter="*" class="selected opc-main-bg">Mostrar Todo</a></li>
                                 <li><a href="#" class="opc-main-bg" data-filter=".animals">Animales</a></li>
                                 <li><a href="#" class="opc-main-bg" data-filter=".aduls">Adulto Mayor</a></li>
                                 
                            </ul>

                            <!-- work box section -->
                            <div class="work-box-section wow aduls fadeInUp" data-wow-delay="1.4s">
                                <div class="work-box-wrapper col4-work-box">

                                    <div class="work-box graphic print branding html col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/foto4.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/foto4.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box graphic print animals col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/foto1.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/foto1.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box branding apps aduls col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/foto5.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/foto5.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box graphic apps animals col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/foto2.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/foto2.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web apps animals col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/foto3.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/foto3.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web print aduls col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/foto6.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/foto6.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web html aduls col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/foto7.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/foto7.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box graphic print aduls col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/foto8.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/foto8.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web print aduls col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/foto9.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/foto9.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                 </div>
                            </div>

                        </div>

                </div>

            </div>
        </div>
    </section>


@endsection

@section('js')

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/custom.js"></script>

@endsection
