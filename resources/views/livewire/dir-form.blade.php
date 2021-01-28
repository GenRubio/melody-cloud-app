<div>
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Visibilidad</label>
    </div>
    <br>
    <form id="addSound" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="dir" value="{{ $dir }}">
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input name="sound" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
    <script>
        $(document).ready(function() {
            $("#addSound").on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "{{ route('add.user.sound') }}",
                    method: 'POST',
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $("#addSound")[0].reset();
                        Livewire.emit('render')
                    },
                    error: function(error) {
                    }
                })
            });
        });

    </script>
</div>
