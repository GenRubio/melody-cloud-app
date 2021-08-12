<nav class="navbar navbar-expand" style="background-color: #383838 !important">
    <a class="navbar-brand font-bold" id="sidebarCollapse" href="#" style="color: #a1a1a1;">
        <i class="fas fa-bars"></i>
    </a>
  
    <div class="collapse navbar-collapse" id="navbarSuapportedContent-4">
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item avatar dropdown">
                <a class="nav-link dropdown" id="navbarDropdownMenuLink-saju" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0"
                        alt="avatar image" height="36" width="36">
                </a>
                <div class="dropdown-menu dropdown-menu-lg-right dropdown"
                    aria-labelledby="navbarDropdownMenuLink-saju">
                    <a class="dropdown-item" href="#">My account</a>
                    <a id="log-out" class="dropdown-item" href="#">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<script>
    $(document).ready(function() {
        $('#log-out').click(function(event) {
            event.preventDefault();

            $.ajax({
                url: "{{ route('dashboard.go-out') }}",
                method: "POST",
                data: {
                    '_token': "{{ csrf_token() }}"
                },
                success: function(data) {
                    location.href = "{{ route('home') }}";
                }
            })
        })
    });
</script>
