@extends('layouts.app')
@section('css')
    <link href="{{ url('/css/footer.css') }}" rel="stylesheet">
    <link href="{{ url('/css/home.css') }}" rel="stylesheet">
@endsection
@section('navBar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg" style="height: 61px;">
        <a class="navbar-brand" href="#">MelodyCloud</a>
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
                    <div class="col p-5" style="color: white">
                        <div style="margin-top: 160px">
                            <h1><strong style="font-size: 38px; color: red;">MelodyCloud+</strong></h1>
                            <p><strong style="font-size: 17px; color: red;">¡Almacena tus canciones, añade amigos, crea listas compartidas y mucho más!<br>
                                ¿A qué esperas para descubrir MelodyCloud?</strong></p>
                                <a href="{{ route('registro') }}" class="btn btn-outline-danger btn-lg" style="font-size: 27px;"><strong>DESCUBRIR</strong></a>
                        </div>

                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>


        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                                dy=".3em">140x140</text>

                        </svg>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h2>Hola</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa explicabo cupiditate voluptatibus.
                        Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti
                        nam
                        officiis, ea eveniet officia repellendus.</p>

                    <div class="d-flex justify-content-center">
                        <button id="tag1" class="btn btn-secondary">Hola</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                                dy=".3em">140x140</text>
                        </svg>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h2>Hola</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa explicabo cupiditate voluptatibus.
                        Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti
                        nam
                        officiis, ea eveniet officia repellendus.</p>

                    <div class="d-flex justify-content-center">
                        <button id="tag2" class="btn btn-secondary">Hola</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                                dy=".3em">140x140</text>
                        </svg>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h2>Hola</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa explicabo cupiditate voluptatibus.
                        Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti
                        nam
                        officiis, ea eveniet officia repellendus.</p>

                    <div class="d-flex justify-content-center">
                        <div class="d-flex justify-content-center">
                            <button id="tag3" class="btn btn-secondary">Hola</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider" id="section1">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Hola<span class="text-muted">mundo</span></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint enim reprehenderit nemo?
                        Possimus quod neque deleniti officia quis animi sunt nihil eaque, odio, provident ipsum illo
                        corporis
                        reprehenderit a! Magnam?</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider" id="section2">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Hola<span class="text-muted">mundo</span></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint enim reprehenderit nemo?
                        Possimus quod neque deleniti officia quis animi sunt nihil eaque, odio, provident ipsum illo
                        corporis
                        reprehenderit a! Magnam?</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider" id="section3">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Hola<span class="text-muted">mundo</span></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint enim reprehenderit nemo?
                        Possimus quod neque deleniti officia quis animi sunt nihil eaque, odio, provident ipsum illo
                        corporis
                        reprehenderit a! Magnam?</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>

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
