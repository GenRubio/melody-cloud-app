<nav id="sidebar" class="p-2">
    <div class="sidebar-header">
        <div class="d-flex justify-content-center">
            <a href="{{ route('home') }}">
                <h3>Melody<b style="color: #33cabb;">Cloud</b></h3>
            </a>
        </div>

    </div>

    <ul class="list-unstyled components">
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> My sounds</a>
        </li>
        <div class="divisor-nav">
            TEST MANAGER
        </div>
    </ul>
</nav>
