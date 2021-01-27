@extends('dashboard')

@section('dashboard-content')
    <div class="container">
        <livewire:dir-form :dir="$dirName"/>
        <br>
        <h4><strong>{{ $dirName }}</strong></h4>
        <hr>
        <livewire:dir-content :dir="$dirName"/>
    </div>
@endsection
