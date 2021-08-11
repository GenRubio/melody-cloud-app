<div class="modal fade" id="createList" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create new sound list</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="create-new-sound-list">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input name="list" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Sound list name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary create-list-button">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('submit', '#create-new-sound-list', function(event) {
            $('.create-list-button').attr('disabled', true);
            event.preventDefault();

            $.ajax({
                url: "{{ route('list.create') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(data) {
                    if (data.success) {
                        $('#createList').modal('hide');
                        $('#create-new-sound-list')[0].reset();

                        setTimeout(function() {
                            $("#sound-lists-bar").html(data.content);
                            $('.select-copy-list').html(data.sound_list);

                            toastr.options.closeButton = true;
                            toastr.success(data.message);
                        }, 1000);

                    } else {
                        toastr.options.closeButton = true;
                        toastr.error(data.message);

                        $('#create-new-sound-list')[0].reset();
                    }
                    $('.create-list-button').attr('disabled', false);
                }
            });
        })
    })
</script>
