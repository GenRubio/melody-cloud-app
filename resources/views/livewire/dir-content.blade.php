<div>
   

    @if (count($content) > 0)
        @foreach ($content as $sound)
        <audio src="{{ url($sound->sound) }}" controls="controls" type="audio/mpeg" preload="preload">
        </audio>
        @endforeach
    @else
        <div class="p-4 border ronded shadow">
            <div class="d-flex justify-content-center">
                <strong>No hay contenido</strong>
            </div>
        </div>
    @endif
</div>
