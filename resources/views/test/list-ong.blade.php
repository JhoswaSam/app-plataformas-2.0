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
    <li><a href="/">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li class="active"><a href="/services">Service</a></li>
    <li><a href="work.html">Work</a></li>
    <li><a href="contact.html">Contact</a></li>
    
        @if (Route::has('login'))   
            @auth
                @if ($user->usuario)
                    <li>
                        <a href="{{ url('/dashboard') }}">{{ __('Dashboard') }}</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
                    </li>
                
                    <!-- Authentication -->
                    <li>
                        <form style="margin-top: 14%" method="POST" action="{{ url('/logout2') }}" x-data>
                            @csrf
                            <a href="{{ url('/logout2') }}" @click.prevent="$root.submit();">{{ __('Log Out') }}</a>
                        </form>
                    </li>

                @endif
            @else
                <li>
                    <a href="{{ route('login') }}" >Log in</a>
                </li>

            @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" >Register</a>
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
                    <h1 class="wow fadeInUp head" data-wow-delay="0.6s">What we do</h1>
                    <p class="wow fadeInUp lr-pd" data-wow-delay="0.8s">We help Brands and Businesses build communication across Web, Print and Digital Medium.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- ser section -->

    <section class="veg_section layout_padding">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Our Vegetables
            </h2>
            <p>
              which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
            </p>
          </div>

          <div class="row" style="margin-top: 30px;">
            @foreach ($ongs as $ong)
              <div class="col-md-6 col-lg-4">
                <div class="box">
                  <div class="img-box">
                    <img src="img/p1.png" alt="">
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

          <div id="cta" style="padding: 0% ;margin-bottom: 40px;" class="btn-box">
            <a href="" class="wow fadeInUp btn btn-success">
              View More
            </a>
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
