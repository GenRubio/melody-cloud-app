@extends('layouts.panel')


@section('scripts')
    <script src="https://cdn.socket.io/4.1.2/socket.io.min.js"
        integrity="sha384-toS6mmwu70G0fw54EGlWWeA4z3dyJ+dlXBtSURSKN4vyRFOcxd3Bzjj/AoOwY+Rg" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            const socket = io('http://127.0.0.1:3000');

            $(document).on('submit', '#searchYoutube', function(event) {
                event.preventDefault();
                let data = {
                    'token_uid': "{{ auth()->user()->id }}",
                    'video': $('#videoYouTubeUrl').val(),
                };
                socket.emit("sendSound", data);

            })
        })
    </script>
@endsection
