<div>
    @if (count($content) > 0)
        @foreach ($content as $sound)
            <div class="d-flex">
                <div class="ml-3">
                    <audio controls>
                        <source src="{{ $sound->sound }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div>
                    <button wire:click="delete({{ $sound->id }})" class="btn btn-danger">Elimnar</button>
                </div>
            </div>
        @endforeach
    @else
        <div class="p-4 border ronded shadow">
            <div class="d-flex justify-content-center">
                <strong>No hay contenido</strong>
            </div>
        </div>
    @endif
</div>
