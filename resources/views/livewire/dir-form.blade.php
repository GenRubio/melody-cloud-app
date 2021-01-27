<div>
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Visibilidad</label>
    </div>
    <br>
    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input wire:model="sound" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
