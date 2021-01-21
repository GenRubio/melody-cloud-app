@extends('layouts.app')
@section('css')
    <link href="{{ url('/css/footer.css') }}" rel="stylesheet">
    <link href="{{ url('/css/home.css') }}" rel="stylesheet">
@endsection
@section('navBar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg" style="height: 61px;">
        <a class="navbar-brand" href="#"><strong style="color: red"><i class="fas fa-cloud"></i> MelodyCloud</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <form class="form-inline my-2 my-lg-0 mr-2">
                <a href="{{ route('login') }}" class="btn btn-outline-danger my-2 my-sm-0" type="submit">
                    <strong>Log in</strong>
                </a>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <a href="{{ route('registro') }}" class="btn btn-danger my-2 my-sm-0" type="submit">
                    <strong>Sing Up</strong>
                </a>
            </form>
        </div>
    </nav>
@endsection
@section('content')
    <div style="background-color: #d0d0ce;">
        <div id="imagenPortada">
            <div class="container">
                <div class="row">
                    <div class="col" style="color: white">
                        <div style="margin-top: 160px">
                            <h1><strong style="font-size: 38px; color: red;">MelodyCloud+</strong></h1>
                            <p><strong style="font-size: 17px; color: red;">¡Almacena tus canciones, añade amigos, crea
                                    listas compartidas y mucho más!<br>
                                    ¿A qué esperas para descubrir MelodyCloud?</strong></p>
                            <a href="{{ route('registro') }}" class="btn btn-outline-danger btn-lg"
                                style="font-size: 27px;"><strong>DESCUBRIR</strong></a>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center">
                        <div class="shadow"
                            style="height: 140px; width: 140px; border-radius: 50%; background-color:#f8f9fa;">
                            <!--Icono--->
                            <div class="d-flex justify-content-center h-100">
                                <i class="fas fa-cloud my-auto" style="font-size: 70px;color: #dd0c0c;"></i>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <h2>{{ $sections[0]->title }}</h2>
                    </div>
                    <p>{!! nl2br(e($sections[0]->description)) !!}</p>

                    <div class="d-flex justify-content-center">
                        <button id="tag1" class="btn btn-secondary mb-2">
                            <strong>Read more</strong></button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center">
                        <div class="shadow"
                            style="height: 140px; width: 140px; border-radius: 50%; background-color:#f8f9fa;">
                            <!--Icono--->
                            <div class="d-flex justify-content-center h-100">
                                <i class="fas fa-music my-auto" style="font-size: 70px;color: #dd0c0c;"></i>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <h2>{{ $sections[1]->title }}</h2>
                    </div>
                    <p>{!! nl2br(e($sections[1]->description)) !!}</p>
                    <div class="d-flex justify-content-center">
                        <button id="tag2" class="btn btn-secondary mb-2">
                            <strong>Read more</strong>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center">
                        <div class="shadow"
                            style="height: 140px; width: 140px; border-radius: 50%; background-color:#f8f9fa;">
                            <!--Icono--->
                            <div class="d-flex justify-content-center h-100">
                                <i class="fas fa-users my-auto" style="font-size: 70px;color: #dd0c0c;"></i>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <div class="my-auto">
                            <h2>{{ $sections[2]->title }}</h2>
                        </div>
                    </div>
                    <p>{!! nl2br(e($sections[2]->description)) !!}</p>

                    <div class="d-flex justify-content-center">
                        <div class="d-flex justify-content-center">
                            <button id="tag3" class="btn btn-secondary mb-2">
                                <strong>Read more</strong>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- START THE FEATURETTES -->
            <br>
            <hr class="featurette-divider" id="section1">
            <br>
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">{{ $readers[0]->title }}</h2>
                    <p class="lead">{!! nl2br(e($readers[0]->description)) !!}</p>
                </div>
                <div class="col-md-5">
                    <div class="shadow">
                        <img src="{{ url('' . $readers[0]->url_image . '') }}" style="display: block;
                        margin: 0 auto;
                        max-width: 100%;
                        width: 100%;">
                    </div>
                </div>
            </div>
            <br>
            <hr class="featurette-divider" id="section2">
            <br>
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">{{ $readers[1]->title }}</span></h2>
                    <p class="lead">{!! nl2br(e($readers[1]->description)) !!}</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <div class="shadow">
                        <img src="{{ url('' . $readers[1]->url_image . '') }}" style="display: block;
                        margin: 0 auto;
                        max-width: 100%;
                        width: 100%;">
                    </div>

                </div>
            </div>
            <br>
            <hr class="featurette-divider" id="section3">
            <br>
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">{{ $readers[2]->title }}</span></h2>
                    <p class="lead">{!! nl2br(e($readers[2]->description)) !!}</p>
                </div>
                <div class="col-md-5">
                    <div class="shadow">
                        <img src="{{ url('' . $readers[2]->url_image . '') }}" style="display: block;
                        margin: 0 auto;
                        max-width: 100%;
                        width: 100%;">
                    </div>

                </div>
            </div>
            <br><br>
        </div>
        @include('components.footer')
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#tag1").click(function() {
                $('html, body').animate({
                    scrollTop: $("#section1").offset().top
                }, 1000);
            });
            $("#tag2").click(function() {
                $('html, body').animate({
                    scrollTop: $("#section2").offset().top
                }, 1000);
            });
            $("#tag3").click(function() {
                $('html, body').animate({
                    scrollTop: $("#section3").offset().top
                }, 1000);
            });
        });

    </script>
@endsection
