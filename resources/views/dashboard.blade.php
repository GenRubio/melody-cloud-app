@extends('layouts.panel')

@section('content')
    <div class="container-fluid">
        <div>
            <button class="btn btn-primary" data-toggle="modal" data-target="#add-sound">
                <i class="fas fa-plus"></i> Add sound
            </button>
            @include('components.modal-add-sound')
        </div>
        <br>
        <div id="first-sound-container">
            @include('components.sound-list', [
            'sounds' => auth()->user()->sounds
            ])
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection

@section('personal-script')
    <script src="https://cdn.socket.io/4.1.2/socket.io.min.js"
        integrity="sha384-toS6mmwu70G0fw54EGlWWeA4z3dyJ+dlXBtSURSKN4vyRFOcxd3Bzjj/AoOwY+Rg" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            const socket = io('http://127.0.0.1:3000');

            $(document).on('submit', '#searchYoutube', function(event) {
                event.preventDefault();

                $('#button-add-sound').attr('disabled', true);
                $('#button-add-sound').text("Cargando mp3...");

                let data = {
                    'user_id': "{{ auth()->user()->id }}",
                    'token_uid': "{{ auth()->user()->uid }}",
                    'video': $('#videoYouTubeUrl').val(),
                };

                socket.emit("sendSound", data);
            })

            socket.on('reloadSoundList-' + "{{ auth()->user()->uid }}", (message) => {
                $('#button-add-sound').text("LISTO");

                location.href = "{{ route('dashboard') }}";
            });

        })
    </script>
@endsection
