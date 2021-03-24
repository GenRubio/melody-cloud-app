@extends('layouts.app')

@section('css')
    <link href="{{ url('/css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('navBar')
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <span class="menu-collapsed"><strong style="color: red"><i class="fas fa-cloud"></i> MelodyCloud</strong></span>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <!-- This menu is hidden in bigger devices with d-sm-none.
                                                       The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
                <li class="nav-item dropdown d-sm-block d-md-none">
                    <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"> Menu </a>
                    <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                        <a class="dropdown-item" href="#">Dashboard</a>
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Tasks</a>
                        <a class="dropdown-item" href="#">Etc ...</a>
                    </div>
                </li>
                <!-- Smaller devices menu END -->
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <div class="row" id="body-row">
        <!-- Sidebar -->
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block col-2">
            <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
            <!-- Bootstrap List Group -->
            <ul class="list-group sticky-top sticky-offset">
                <!-- Separator with title -->
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MAIN MENU</small>
                </li>
                <!-- /END Separator -->
                <!-- Menu with submenu -->
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false"
                    class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-user fa-fw mr-3"></span>
                        <span class="menu-collapsed">Profile</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id="submenu2" class="collapse sidebar-submenu">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Settings</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed">Password</span>
                    </a>
                </div>
                <a href="#submenu4" data-toggle="collapse" aria-expanded="false"
                    class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-user fa-fw mr-3"></span>
                        <span class="menu-collapsed">Friends</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id="submenu4" class="collapse sidebar-submenu">
                    <a style="cursor: pointer" class="list-group-item list-group-item-action bg-dark text-white"
                        data-toggle="modal" data-target="">
                        <span class="menu-collapsed" style="color: rgb(14, 207, 14)"><i
                                class="fas fa-plus-circle mr-2"></i>Add new</span>
                    </a>
                    <livewire:user-friends />
                </div>
                <!-- Separator with title -->
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>OPTIONS</small>
                </li>
                <!-- /END Separator -->
                <!-- Menu with submenu -->
                <a href="#submenu3" data-toggle="collapse" aria-expanded="false"
                    class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-user fa-fw mr-3"></span>
                        <span class="menu-collapsed">Mis Carpetas</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id="submenu3" class="collapse sidebar-submenu">
                    <a style="cursor: pointer" class="list-group-item list-group-item-action bg-dark text-white"
                        data-toggle="modal" data-target="#addDir">
                        <span class="menu-collapsed" style="color: rgb(14, 207, 14)"><i
                                class="fas fa-plus-circle mr-2"></i>Add new</span>
                    </a>
                    <livewire:user-directorys />
                </div>
                <!-- Separator without title -->
                <li class="list-group-item sidebar-separator menu-collapsed"></li>

                <a href="#" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-question fa-fw mr-3"></span>
                        <span class="menu-collapsed">Help</span>
                    </div>
                </a>


                <a href="{{ route('dashboard.go-out') }}" data-toggle="sidebar-colapse"
                    class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                        <span id="collapse-text" class="menu-collapsed" style="color: red"><i
                                class="fas fa-sign-out-alt mr-2"></i>
                            <strong>Log Out</strong>
                        </span>
                    </div>
                </a>
                <!-- Logo -->
                <li class="list-group-item logo-separator d-flex justify-content-center">
                    <i style="font-size: 45px; color:red;" class="fas fa-cloud"></i>
                </li>
            </ul>
            <!-- List Group END-->
        </div>
        <!-- sidebar-container END -->
        <!-- MAIN -->
        <div class="col py-3" style="background-color: #d0d0ce;">
            @yield('dashboard-content')
        </div>
        <!-- Main Col END -->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addDir" tabindex="-1" role="dialog" aria-labelledby="addDirLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <livewire:add-directory-form />
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
