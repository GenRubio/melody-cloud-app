<div>
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Visibilidad</label>
    </div>
    <br>
    <button id="openFormCloud" onclick="openFormCloudFunction()" class="btn btn-danger">
        <strong>
            <i class="fas fa-cloud"></i>
            Añadir Melody
        </strong>
    </button>
    <div id="formularioSubirSound">
        <hr>
        <form id="searchYoutube">
            <input id="videoYouTubeUrl" type="text" class="form-control mb-2" placeholder="Guardar cancion de YouTube">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">
                    <strong>Search YouTube</strong>
                </button>
            </div>
        </form>
        <div class="d-flex justify-content-center">
            <strong style="color: white">O</strong>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-danger" data-toggle="modal" data-target="#cargarCancion">
                <strong>Cargar cancion desde PC</strong>
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="cargarCancion" tabindex="-1" role="dialog" aria-labelledby="cargarCancionLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="addSound" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="cargarCancionLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="dir" value="{{ $dir }}">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input name="sound" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Crear Melody</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#formularioSubirSound').fadeOut(1);
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
                    error: function(error) {}
                })
            });
        });

        function openFormCloudFunction() {
            $('#formularioSubirSound').fadeIn(1000);
        }
    </script>
</div>
