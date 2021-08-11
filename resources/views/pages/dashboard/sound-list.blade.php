@extends('layouts.panel')

@section('content')
    <div class="container-fluid">
        <br>
        <div id="first-sound-container">
            @include('components.sound-list', [
            'sounds' => $sounds
            ])
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection

@section('personal-script')
    
@endsection