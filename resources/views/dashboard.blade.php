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
            <form class="form-inline my-2 my-lg-0" method="POST", action="{{ route('dashboard.go-out') }}">
                @csrf
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Go out</button>
            </form>
        </div>
    </nav>
@endsection

@section('content')

@endsection
