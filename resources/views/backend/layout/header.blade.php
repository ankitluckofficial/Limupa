<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Responsive Admin & Dashboard">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="admin, dashboard, bootstrap, laravel">

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Limupa Dashboard</title>
    <link rel="stylesheet" href="{{ asset('backend/css/newweb.css') }}">


    {{-- AdminKit CSS --}}
    <link rel="stylesheet" href="{{ asset('backend/css/app.css') }}">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- Chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- jsVectorMap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap/dist/css/jsvectormap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jsvectormap"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap/dist/maps/world.js"></script>

</head>

<body>

    <div class="wrapper">

        {{-- =========================================================
        SIDEBAR
    ========================================================== --}}
        <nav id="sidebar" class="sidebar js-sidebar">

            <div class="sidebar-content js-simplebar">

                <a class="sidebar-brand" href="#">
                    <img src="{{ asset('images/menu/logo/2.jpg') }}" alt="Logo">
                </a>

                <ul class="sidebar-nav">

                    <li class="sidebar-header">
                        Limupa
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('banners.index') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('banners.index') }}">
                            <i class="align-middle" data-feather="image"></i>
                            <span class="align-middle">Banners</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('products.index') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('products.index') }}">
                            <i class="align-middle" data-feather="box"></i>
                            <span class="align-middle">Products</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('users.index') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('users.index') }}">
                            <i class="align-middle" data-feather="users"></i>
                            <span class="align-middle">Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ request()->routeIs('contacts.index') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('contacts.index') }}">
                            <i class="align-middle" data-feather="mail"></i>
                            <span class="align-middle">Contacts</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('settings.index') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('settings.index') }}">
                            <i class="align-middle" data-feather="settings"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('about.index') ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('about.index') }}">
                            <i class="align-middle" data-feather="info"></i>
                            <span class="align-middle">About</span>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

        {{-- =========================================================
        MAIN
    ========================================================== --}}
        <div class="main">


            {{-- =====================================================
            NAVBAR
        ====================================================== --}}
            <nav class="navbar navbar-expand navbar-light navbar-bg">

                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">

                    <ul class="navbar-nav navbar-align">


                        {{-- Notifications --}}
                        <li class="nav-item dropdown">

                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown"
                                data-bs-toggle="dropdown">

                                <div class="position-relative">

                                    <i class="align-middle" data-feather="bell"></i>

                                    <span class="indicator">
                                        4
                                    </span>

                                </div>

                            </a>


                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0">

                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>

                                <div class="list-group">

                                    <a href="#" class="list-group-item">

                                        <div class="row g-0 align-items-center">

                                            <div class="col-2">

                                                <i class="text-danger" data-feather="alert-circle"></i>

                                            </div>

                                            <div class="col-10">

                                                <div class="text-dark">
                                                    Update completed
                                                </div>

                                                <div class="text-muted small mt-1">
                                                    Restart server to complete update.
                                                </div>

                                                <div class="text-muted small mt-1">
                                                    30m ago
                                                </div>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">
                                        Show all notifications
                                    </a>
                                </div>

                            </div>

                        </li>


                        {{-- Messages --}}
                        <li class="nav-item dropdown">

                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
                                data-bs-toggle="dropdown">

                                <div class="position-relative">

                                    <i class="align-middle" data-feather="message-square"></i>

                                </div>

                            </a>


                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0">

                                <div class="dropdown-menu-header">
                                    4 New Messages
                                </div>

                                <div class="list-group">

                                    <a href="#" class="list-group-item">

                                        <div class="row g-0 align-items-center">

                                            <div class="col-2">

                                                <img src="{{ asset('backend/img/avatars/avatar-5.jpg') }}"
                                                    class="avatar img-fluid rounded-circle" alt="User">

                                            </div>

                                            <div class="col-10 ps-2">

                                                <div class="text-dark">
                                                    Vanessa Tucker
                                                </div>

                                                <div class="text-muted small mt-1">
                                                    Nam pretium turpis et arcu.
                                                </div>

                                                <div class="text-muted small mt-1">
                                                    15m ago
                                                </div>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                                <div class="dropdown-menu-footer">

                                    <a href="#" class="text-muted">
                                        Show all messages
                                    </a>

                                </div>

                            </div>

                        </li>


                        {{-- User --}}
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">

                                <img src="{{ asset('backend/img/avatars/avatar.jpg') }}"
                                    class="avatar img-fluid rounded me-1" alt="User">

                                <span class="text-dark">
                                    Limupa
                                </span>

                            </a>


                            <div class="dropdown-menu dropdown-menu-end">

                                <a class="dropdown-item" href="#">

                                    <i class="align-middle me-1" data-feather="user"></i>

                                    Profile

                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#">

                                    <i class="align-middle me-1" data-feather="settings"></i>

                                    Settings & Privacy

                                </a>

                                <a class="dropdown-item" href="#">

                                    <i class="align-middle me-1" data-feather="help-circle"></i>

                                    Help Center

                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ url('/logout') }}">
                                    😊 Log out 😊
                                </a>

                            </div>

                        </li>

                    </ul>

                </div>

            </nav>
