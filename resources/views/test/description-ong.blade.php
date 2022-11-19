@extends('layouts.head')

@section('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="../css/animate.css">

    <!-- Font Awesome Icons CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- Magnific-popup CSS -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
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

    <!-- Product section-->
    <section style="margin-top: 30px;margin-bottom: 30px;" class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img style="max-width: 100%" class="card-img-top mb-5 mb-md-0" src="https://images.pexels.com/photos/6479563/pexels-photo-6479563.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="..." />
                </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{$ong->nombreOng}}</h1>
                    
                    <p style="margin-top: 3%" class="lead">{{$ong->descripcionOng}}</p>
                    
                    <div id="cta" style="padding: 0% ;margin-bottom: 40px;" class="btn-box">
                        <a href="./{{$ong->id}}/payment" class="wow fadeInUp btn btn-success">
                          Donate
                        </a>
                      </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

@section('js')

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/custom.js"></script>
@endsection
