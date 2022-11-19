@extends('layouts.head')

<style>
    
    input{
        max-width: 30%;
    }

    .grid--50-50 {
    display: grid;
    grid-template-columns: 50% 50%;
    align-items: center;
    }

    .field input {
    font-size: 16px;
    line-height: 28px;
    padding: 8px 16px;
    width: 100%;
    min-height: 44px;
    border: unset;
    border-radius: 4px;
    outline-color: rgb(84 105 212 / 0.5);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px;
    }

    .field select {
    font-size: 16px;
    line-height: 28px;
    padding: 8px 16px;
    width: 100%;
    min-height: 44px;
    border: unset;
    border-radius: 4px;
    outline-color: rgb(84 105 212 / 0.5);
    background-color: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.16) 0px 0px 0px 1px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px,
        rgba(0, 0, 0, 0) 0px 0px 0px 0px;
    }

    .formbg {
    margin: 0px auto;
    width: 100%;
    max-width: 448px;
    }
    .padding-horizontal--48 {
    padding: 48px;
    }
    .padding-bottom--24 {
    padding-bottom: 24px;
    }
    .reset-pass a,
    label {
    font-size: 14px;
    font-weight: 600;
    display: block;
    }
    .reset-pass > a {
    text-align: right;
    margin-bottom: 10px;
    }


</style>

@section('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css"> 

    <!-- Main css -->
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="../../css/animate.css">

    <!-- Font Awesome Icons CSS -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">

    <!-- Magnific-popup CSS -->
    <link rel="stylesheet" href="../../css/magnific-popup.css">
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
<div class="formbg">
    <div class="padding-horizontal--48">
        <div class="container p-0">
            <div class="card px-4">
                <p class="h8 py-3 field padding-bottom--24">Payment Details</p>
                <div class="row gx-3">
                    <form action="/services/{{$ong->id}}/payment" method="POST">
                        @csrf
                        <div class="col-12 field padding-bottom--24">
                            <div class="d-flex flex-column">
                                <p class="text mb-1">Person Name</p>
                                <input class="form-control mb-3" type="text" placeholder="Name" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="col-12 field padding-bottom--24">
                            <div class="d-flex flex-column">
                                <p class="text mb-1">Card Number</p>
                                <input class="form-control mb-3" type="text" placeholder="1234 5678 435678">
                            </div>
                        </div>
                        <div class="col-6 field padding-bottom--24">
                            <div class="d-flex flex-column">
                                <p class="text mb-1">Expiry</p>
                                <input class="form-control mb-3" type="text" placeholder="MM/YYYY">
                            </div>
                        </div>
                        <div class="col-6 field padding-bottom--24">
                            <div class="d-flex flex-column">
                                <p class="text mb-1">CVV/CVC</p>
                                <input class="form-control mb-3 pt-2 " type="password" placeholder="***">
                            </div>
                        </div>
                        <div class="col-6 field padding-bottom--24">
                            <div class="d-flex flex-column">
                                <p class="text mb-1">Amount</p>
                                <input id="cantidad" name="cantidad" class="form-control mb-3 pt-2 " type="number" placeholder="$$$">
                            </div>
                        </div>
                        <div class="col-6 field padding-bottom--24">
                            <div class="d-flex flex-column">
                                <p class="text mb-1">Description</p>
                                <input id="descripcion" name="descripcion" class="form-control mb-3 pt-2 " type="text" placeholder="Message">
                            </div>
                        </div>
                        

                        <a href="/" class="btn btn-secondary" tabindex="5">Cancel</a>
                        <button type="submit" class="btn btn-primary" tabindex="4">Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('js')

    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script src="../../js/custom.js"></script>
@endsection
