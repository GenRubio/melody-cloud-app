@extends('layouts.app')
@section('css')
    <link href="{{ url('/css/login.css') }}" rel="stylesheet">
    <link href="{{ url('/css/footer.css') }}" rel="stylesheet">
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
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 mr-2">
                <a href="{{ route('login') }}" class="btn btn-outline-danger my-2 my-sm-0" type="submit">
                    <strong>Log in</strong>
                </a>
            </form>
        </div>
    </nav>
@endsection

@section('content')
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="{{ url('/images/login/portada2.jpg') }}" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="{{ url('/images/login/logo.svg') }}" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">Register account</p>

                            <livewire:register-form />

                            <nav class="login-card-footer-nav">
                                <a href="#!">Terms of use.</a>
                                <a href="#!">Privacy policy</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('components.footer')
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#name").focus();
        });
    </script>
@endsection
