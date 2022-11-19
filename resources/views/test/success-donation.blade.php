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
    <li class="active"><a href="/">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="/services">Service</a></li>
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

    <section id="home" class="main">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h1 class="wow fadeInUp head" data-wow-delay="0.6s">We are digital agency.</h1>
                    <p class="wow fadeInUp lr-pd" data-wow-delay="0.8s">Leading Digital Agency with deep creative insight based in Clifornia, We help Brands and Businesses build communication across Web, Print and Digital Medium. Let's work together.</p>
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
                                 <li><a href="#" data-filter="*" class="selected opc-main-bg">Show All</a></li>
                                 <li><a href="#" class="opc-main-bg" data-filter=".web">Web Design</a></li>
                                 <li><a href="#" class="opc-main-bg" data-filter=".print">Print</a></li>
                                 <li><a href="#" class="opc-main-bg" data-filter=".branding">Branding</a></li>
                                 <li><a href="#" class="opc-main-bg" data-filter=".apps">Apps</a></li>
                                <li><a href="#" class="opc-main-bg" data-filter=".html">Templates</a></li>
                            </ul>

                            <!-- work box section -->
                            <div class="work-box-section wow fadeInUp" data-wow-delay="1.4s">
                                <div class="work-box-wrapper col4-work-box">

                                    <div class="work-box graphic print branding html col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/portfolio-img1.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/portfolio-img1.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box graphic print col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/portfolio-img2.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/portfolio-img2.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box branding apps col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/portfolio-img3.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/portfolio-img3.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box graphic apps col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/portfolio-img4.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/portfolio-img4.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web apps col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/portfolio-img5.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/portfolio-img5.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web print col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/portfolio-img6.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/portfolio-img6.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web html col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/portfolio-img7.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/portfolio-img7.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box graphic print col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/portfolio-img8.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/portfolio-img8.jpg" class="img-responsive" alt="Portfolio">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="work-box web print col-md-4 col-sm-6">
                                        <div class="portfolio-thumb">
                                            <a href="img/portfolio-img9.jpg" class="image-popup">
                                                <div class="portfolio-item-hover">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                                <img src="img/portfolio-img9.jpg" class="img-responsive" alt="Portfolio">
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

