@if (count($soundLists) > 0)
    <div class="form-group">
        <select name="list" class="form-control" id="listSounds">
            @foreach ($soundLists as $list)
                <option value="{{ $list->id }}">{{ $list->name }}</option>
            @endforeach
        </select>
    </div>
@else
    <div>
        No tienes listas creadas.
    </div>
@endif
