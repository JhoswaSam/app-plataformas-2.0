@extends('layouts.head')

@section('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Font Awesome Icons CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Magnific-popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
@endsection

@section('menu-active')
    <li><a href="/">Inicio</a></li>
    <li><a href="/about">Nosotros</a></li>
    <li class="active"><a href="/services">Ongs</a></li>
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

    <section id="home" class="main-service">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h1 class="wow fadeInUp head" data-wow-delay="0.6s">Lista de ongs</h1>
                    <p class="wow fadeInUp lr-pd" data-wow-delay="0.8s">Aqui podras ver todas las ongs registradas aqui previamente verificadas por nuestro equipo para que puedas donar con toda confianza</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ser section -->

    <section style="margin-bottom: 30px;" class="veg_section layout_padding">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Ongs
            </h2>
            <p>
              Todos ellos necesitan un poco de ayuda busca la que creas que necesitan de tu ayuda y donales lo que puedas ofrecer.
            </p>
          </div>

          <div class="row" style="margin-top: 30px;">
            @foreach ($ongs as $ong)
              <div class="col-md-6 col-lg-4">
                <div class="box">
                  <div class="img-box">
                    <img style="max-width: 100%;" src="{{asset($ong->fotoOng)}}" alt="{{$ong->nombreOng}}">
                  </div>
                  <div class="detail-box">
                    <a href="/services/{{$ong->id}}">
                      {{$ong->nombreOng}}
                    </a>
                    <div class="price_box">
                      <h6 class="price_heading">
                        Donar <span>$$$</span>
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            
          </div>

          
        </div>
      </section>
    
      <!-- end ser section -->

@endsection

@section('js')

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
@endsection
