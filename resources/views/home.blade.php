@extends('layouts.app')

@section('navBar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg">
        <a class="navbar-brand" href="#">MelodyCloud</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <form class="form-inline my-2 my-lg-0 mr-2">
                <a href="{{ route('login') }}" class="btn btn-outline-success my-2 my-sm-0" type="submit">Log in</a>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <a href="{{ route('registro') }}" class="btn btn-outline-info my-2 my-sm-0" type="submit">Sing Up</a>
            </form>
        </div>
    </nav>
@endsection
@section('content')
    <div style="background-image: url('{{ url('/images/portada.jpg') }}');
                                                        background-size: cover;
                                                        width:101%;
                                                        height:700px;" class="row">
        <div class="col p-5" style="color: white">
            <h3>MelodyCloud+</h3>

        </div>
        <div class="col">
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
                    Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti nam
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
                    Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti nam
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
                    <button id="tag3" class="btn btn-secondary">Hola</button>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa explicabo cupiditate voluptatibus.
                    Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti nam
                    officiis, ea eveniet officia repellendus.</p>

                <div class="d-flex justify-content-center">
                    <a class="btn btn-secondary" href="#" role="button">Hola</a>
                </div>
            </div>
        </div>
        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette section1">
            <div class="col-md-7">
                <h2 class="featurette-heading">Hola<span class="text-muted">mundo</span></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint enim reprehenderit nemo?
                    Possimus quod neque deleniti officia quis animi sunt nihil eaque, odio, provident ipsum illo corporis
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

        <hr class="featurette-divider">

        <div class="row featurette section2">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Hola<span class="text-muted">mundo</span></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint enim reprehenderit nemo?
                    Possimus quod neque deleniti officia quis animi sunt nihil eaque, odio, provident ipsum illo corporis
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

        <hr class="featurette-divider">

        <div class="row featurette section3">
            <div class="col-md-7">
                <h2 class="featurette-heading">Hola<span class="text-muted">mundo</span></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint enim reprehenderit nemo?
                    Possimus quod neque deleniti officia quis animi sunt nihil eaque, odio, provident ipsum illo corporis
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

        <hr class="featurette-divider">
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#tag1").click(function() {
                var objControl = document.getElementById("section3");
                objControl.scrollTop = objControl.offsetTop;
            });
        });

    </script>
@endsection
