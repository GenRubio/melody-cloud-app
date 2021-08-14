<div class="modal fade" id="shareSoundToList" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Copy sound to list</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-copy-sound">
                @csrf
                <input name="sound" type="hidden" id="sound-share-id">
                <div class="modal-body">
                    <div class="select-copy-list">
                        @include('components.select-copy-list', [
                            'soundLists' => auth()->user()->soundLists
                        ])
                    </div>
                    <div class="create-new-list-external">
                        <i class="fas fa-plus"></i> Create new list
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary copy-sound-button">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('submit', '#form-copy-sound', function(event) {
            $('.copy-sound-button').attr('disabled', true);
            event.preventDefault();

            $.ajax({
                url: "{{ route('copy.sound.list') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(data) {
                    if (data.success) {
                        toastr.options.closeButton = true;
                        toastr.success(data.message);

                        $('#shareSoundToList').modal('hide');
                    } else {
                        toastr.options.closeButton = true;
                        toastr.error(data.message);
                    }
                    $('.copy-sound-button').attr('disabled', false);
                }
            })
        })

        $(document).on('click', '.create-new-list-external', function(event){
            event.preventDefault();

            $('#shareSoundToList').modal('hide');
            setTimeout(function(){
                $('#add-sound').modal('show');
            }, 1000);
        })
    })
</script>
