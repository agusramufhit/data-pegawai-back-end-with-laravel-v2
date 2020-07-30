@extends('layouts.app')

@section('title')
Maleo
@endsection

@section('content')
<nav class="navbar py-2 navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ url('frontend/images/logo_maleo.png')}}" width="160" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active align-self-center">
                    <a class="nav-link" href="#">Product <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link" href="#">Customers</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link" href="#">Resources</a>
                </li>

                @guest
                                    <!--Mobile-->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0" type="button" 
                        onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                        Masuk
                    </button>
                </form>
                <!--Dekstop-->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn px-4 btn-primary ml-2" type="button" 
                        onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                        Masuk
                    </button>
                </form>
                @endguest

                @auth
                <!--Mobile-->
                <form class="form-inline d-sm-block d-md-none" action="{{ url('logout')}}" 
                method="POST">
                @csrf 
                <button class="btn btn-login my-2 my-sm-0" type="submit">
                    Keluar
                </button>
                </form>
                <!--Dekstop-->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout')}}" 
                method="POST">
                @csrf 
                <button class="btn px-4 btn-secondary ml-2" type="submit">
                    Keluar
                </button>
                </form>
                @endauth

            </ul>
        </div>
    </div>
</nav>

<section class="herobwa mt-5">
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <h1 class="mb-4">
                    Build Your Future Career With Us Today
                </h1>
                <p class="mb-4">
                    Tools, tutorials, design and innovation experts, all in one place! The most intuitive way to
                    imagine your next user experience.
                </p>
                <a class="btn btn-primary" href="#" role="button">Get Started</a>
            </div>
            <div class="col d-none d-sm-block">
                <img width="700" src="{{ url('frontend/images/hero-icon2.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection