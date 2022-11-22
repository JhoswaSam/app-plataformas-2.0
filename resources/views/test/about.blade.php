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
    <li class="active"><a href="/about">Nosotros</a></li>
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

    <section id="home" class="main-about">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h1 class="wow fadeInUp head" data-wow-delay="0.6s">Tabaco y Channel</h1>
                    <p class="wow fadeInUp lr-pd" data-wow-delay="0.8s">Somos un grupo de estudiantes que busca realizar una proyecto que ayude a la sociedad, este es el proyecto donde podras conocer a las ongs y poder donarles de manera segura.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->

    


    <!-- Team Section -->

    <section id="team">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="wow bounceIn section-title">
                        <h2>Nuestro equipo</h2>
                    </div>
                </div>

                <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.4s">
                    <div class=" portfolio-thumb team-thumb">
                        <img src="img/aldy2.jpg" class="img-responsive" alt="Team">
                            <div class="team-overlay">
                                <h3>Aldeyny V. G. P.</h3>
                                <h4>Scrum Master</h4>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                            </div>
                    </div>
                </div>

                <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.4s">
                    <div class="portfolio-thumb team-thumb">
                        <img src="img/kel2.jpg" class="img-responsive" alt="Team">
                            <div class="team-overlay">
                                <h3>Kelma S. M.</h3>
                                <h4>UI Designer</h4>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                            </div>
                    </div>
                </div>

                <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.4s">
                    <div class="portfolio-thumb team-thumb">
                        <img src="img/edu.jpg" class="img-responsive" alt="Team">
                            <div class="team-overlay">
                                <h3>H. Eduardo Q. L.</h3>
                                <h4>UI Designer</h4>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                            </div>
                    </div>
                </div>

                <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.6s">
                    <div class="portfolio-thumb team-thumb">
                        <img src="img/mila2.jpg" class="img-responsive" alt="Team">
                            <div class="team-overlay">
                                <h3>Milagros A. A. M.</h3>
                                <h4>UI Designer</h4>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                </ul>
                            </div>
                    </div>
                </div>

                <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.8s">
                    <div class="portfolio-thumb team-thumb">
                        <img src="img/jhos3.jpg" class="img-responsive" alt="Team">
                            <div class="team-overlay">
                                <h3>Jhoswa S.</h3>
                                <h4>Programmer</h4>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
                            </div>
                    </div>
                </div>

                <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.8s">
                    <div class="portfolio-thumb team-thumb">
                        <img src="img/alex.jpg" class="img-responsive" alt="Team">
                            <div class="team-overlay">
                                <h3>Alexander S.</h3>
                                <h4>Programmer</h4>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                </ul>
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
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/custom.js"></script>

@endsection