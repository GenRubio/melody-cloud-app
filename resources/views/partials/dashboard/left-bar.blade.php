<nav id="sidebar" class="p-2">
    <div style="width: 237px; position: fixed !important;">
        <div class="sidebar-header">
            <div class="d-flex justify-content-center">
                <a href="{{ route('home') }}">
                    <h3 style="color: white;margin-top: 6px;
                    margin-bottom: 2px;">Melody<b style="color: #00f8ff;">Cloud</b></h3>
                </a>
            </div>
    
        </div>
    
        <ul class="list-unstyled components" style="margin-top: 14px !important;">
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"><i class="far fa-play-circle"></i> My sounds</a>
            </li>
            <div class="divisor-nav">
                AUTHORS
            </div>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-users"></i> Authors
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <div class="divisor-nav">
                SOUND TRACKS
            </div>
            <li class="active">
                <a href="" data-toggle="modal" data-target="#createList"><i class="far fa-plus-square"></i> Add sound
                    list</a>
            </li>
            <div id="sound-lists-bar">
                @include('components.sound-traks-list', ['soundList' => auth()->user()->soundLists])
            </div>
        </ul>
    </div>
   
</nav>
@include('components.modal-add-list')
