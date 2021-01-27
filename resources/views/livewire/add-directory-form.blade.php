<div>
    <form id="formulario" wire:submit.prevent="create">
        <div class="modal-header">
            <h5 class="modal-title" id="addDirLabel">Crear nuevo directorio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre directorio: </label>
                <input wire:model="nombre" type="text" class="form-control" placeholder="Nombre directorio">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
    </form>
</div>
<script>
    $('#formulario').submit(function(e) {
        e.preventDefault();
        // Coding
        $('#addDir').modal('toggle'); //or  $('#IDModal').modal('hide');
        return false;
    });

</script>
