<style>
    .warning {
        font-weight: bold;
        color: #0000008a;
        font-size: 26px;
        margin-top: -26px;
    }

    .message {
        font-size: 16px;
    }

    .sircle-style {
        color: #f8bc86;
        font-size: 114px;
        margin-top: -42px;
    }

</style>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <div class="sircle-style">
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="warning">
                        Warning
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="message">
                        Are you sure you want to delete this item?
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form id="delete">
                    @csrf
                    @if (Request::is('dashboard'))
                        <input type="hidden" name="sound" class="sound-generic-delete-id">
                    @else
                        <input type="hidden" name="sound" class="sound-generic-delete-id">
                        <input type="hidden" name="list" value="{{ $list }}">
                    @endif
                    <button id="delete-button" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
