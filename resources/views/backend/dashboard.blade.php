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
    <link rel="shortcut icon" href="{{ asset('backend/img/icons/icon-48x48.png') }}">

    <title>Limupa Dashboard</title>

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

                <a class="sidebar-brand" href="{{ url('/admin/dashboard') }}">
                    <span class="align-middle">Limupa Dashboard</span>
                </a>

                <ul class="sidebar-nav">

                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">

                            <i class="align-middle" data-feather="users"></i>

                            <span class="align-middle">
                                Users
                            </span>

                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">

                            <i class="align-middle" data-feather="shopping-cart"></i>

                            <span class="align-middle">
                                Orders
                            </span>

                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">

                            <i class="align-middle" data-feather="settings"></i>

                            <span class="align-middle">
                                Settings
                            </span>

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

                                <a class="dropdown-item" href="#">

                                    <i class="align-middle me-1" data-feather="pie-chart"></i>

                                    Analytics

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

                                    Log out

                                </a>

                            </div>

                        </li>

                    </ul>

                </div>

            </nav>


            {{-- =====================================================
            CONTENT
        ====================================================== --}}
            <main class="content">

                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">
                        <strong>Limupa</strong> Dashboard
                    </h1>


                    {{-- =================================================
                    STAT CARDS
                ================================================== --}}
                    <div class="row">

                        {{-- Sales --}}
                        <div class="col-sm-6 col-xl-3">

                            <div class="card">

                                <div class="card-body">

                                    <h5 class="card-title">
                                        Sales
                                    </h5>

                                    <h1 class="mt-1 mb-3">
                                        2,382
                                    </h1>

                                    <div class="mb-0">
                                        <span class="text-success">
                                            <i data-feather="arrow-up"></i>
                                            5.25%
                                        </span>

                                        <span class="text-muted">
                                            Since last week
                                        </span>
                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Visitors --}}
                        <div class="col-sm-6 col-xl-3">

                            <div class="card">

                                <div class="card-body">

                                    <h5 class="card-title">
                                        Visitors
                                    </h5>

                                    <h1 class="mt-1 mb-3">
                                        14,212
                                    </h1>

                                    <div class="mb-0">

                                        <span class="text-success">
                                            <i data-feather="arrow-up"></i>
                                            8.12%
                                        </span>

                                        <span class="text-muted">
                                            Since last week
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Earnings --}}
                        <div class="col-sm-6 col-xl-3">

                            <div class="card">

                                <div class="card-body">

                                    <h5 class="card-title">
                                        Earnings
                                    </h5>

                                    <h1 class="mt-1 mb-3">
                                        $21,300
                                    </h1>

                                    <div class="mb-0">

                                        <span class="text-success">
                                            <i data-feather="arrow-up"></i>
                                            4.25%
                                        </span>

                                        <span class="text-muted">
                                            Since last week
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Orders --}}
                        <div class="col-sm-6 col-xl-3">

                            <div class="card">

                                <div class="card-body">

                                    <h5 class="card-title">
                                        Orders
                                    </h5>

                                    <h1 class="mt-1 mb-3">
                                        64
                                    </h1>

                                    <div class="mb-0">

                                        <span class="text-danger">
                                            <i data-feather="arrow-down"></i>
                                            -2.25%
                                        </span>

                                        <span class="text-muted">
                                            Since last week
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                    LINE CHART
                ================================================== --}}
                    <div class="row">

                        <div class="col-12">

                            <div class="card flex-fill">

                                <div class="card-header">

                                    <h5 class="card-title mb-0">
                                        Sales Overview
                                    </h5>

                                </div>

                                <div class="card-body">

                                    <div class="chart">

                                        <canvas id="chartjs-dashboard-line">
                                        </canvas>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                    PIE + BAR
                ================================================== --}}
                    <div class="row">


                        {{-- Pie --}}
                        <div class="col-12 col-md-6">

                            <div class="card flex-fill">

                                <div class="card-header">

                                    <h5 class="card-title mb-0">
                                        Browser Usage
                                    </h5>

                                </div>

                                <div class="card-body">

                                    <div class="chart chart-sm">

                                        <canvas id="chartjs-dashboard-pie">
                                        </canvas>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- Bar --}}
                        <div class="col-12 col-md-6">

                            <div class="card flex-fill">

                                <div class="card-header">

                                    <h5 class="card-title mb-0">
                                        Monthly Orders
                                    </h5>

                                </div>

                                <div class="card-body">

                                    <div class="chart">

                                        <canvas id="chartjs-dashboard-bar">
                                        </canvas>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- =================================================
            </div>

        </main>


        {{-- =====================================================
            FOOTER
        ====================================================== --}}
                    <footer class="footer">

                        <div class="container-fluid">

                            <div class="row text-muted">

                                <div class="col-6 text-start">

                                    <p class="mb-0">

                                        <strong>
                                            Limupa
                                        </strong>

                                        &copy; {{ date('Y') }}

                                    </p>

                                </div>


                                <div class="col-6 text-end">

                                    <ul class="list-inline">

                                        <li class="list-inline-item">
                                            <a class="text-muted" href="#">
                                                Support
                                            </a>
                                        </li>

                                        <li class="list-inline-item">
                                            <a class="text-muted" href="#">
                                                Help Center
                                            </a>
                                        </li>

                                        <li class="list-inline-item">
                                            <a class="text-muted" href="#">
                                                Privacy
                                            </a>
                                        </li>

                                        <li class="list-inline-item">
                                            <a class="text-muted" href="#">
                                                Terms
                                            </a>
                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </footer>

                </div>

        </div>


        {{-- =============================================================
    ADMIN KIT JS
============================================================= --}}
        <script src="{{ asset('backend/js/app.js') }}"></script>


        {{-- =============================================================
    DASHBOARD JAVASCRIPT
============================================================= --}}
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                /*
                |--------------------------------------------------------------------------
                | Feather Icons
                |--------------------------------------------------------------------------
                */

                if (typeof feather !== "undefined") {
                    feather.replace();
                }


                /*
                |--------------------------------------------------------------------------
                | LINE CHART
                |--------------------------------------------------------------------------
                */

                const lineCanvas =
                    document.getElementById("chartjs-dashboard-line");

                if (lineCanvas && typeof Chart !== "undefined") {

                    const ctx = lineCanvas.getContext("2d");

                    const gradient =
                        ctx.createLinearGradient(0, 0, 0, 225);

                    gradient.addColorStop(
                        0,
                        "rgba(215, 227, 244, 1)"
                    );

                    gradient.addColorStop(
                        1,
                        "rgba(215, 227, 244, 0)"
                    );


                    new Chart(lineCanvas, {

                        type: "line",

                        data: {

                            labels: [
                                "Jan",
                                "Feb",
                                "Mar",
                                "Apr",
                                "May",
                                "Jun",
                                "Jul",
                                "Aug",
                                "Sep",
                                "Oct",
                                "Nov",
                                "Dec"
                            ],

                            datasets: [{

                                label: "Sales ($)",

                                fill: true,

                                backgroundColor: gradient,

                                borderColor: "#3b7ddd",

                                tension: 0.4,

                                data: [
                                    2115,
                                    1562,
                                    1584,
                                    1892,
                                    1587,
                                    1923,
                                    2566,
                                    2448,
                                    2805,
                                    3438,
                                    2917,
                                    3327
                                ]

                            }]

                        },

                        options: {

                            responsive: true,

                            maintainAspectRatio: false,

                            plugins: {

                                legend: {
                                    display: false
                                }

                            },

                            interaction: {

                                intersect: false,

                                mode: "index"

                            },

                            scales: {

                                x: {

                                    grid: {
                                        display: false
                                    }

                                },

                                y: {

                                    beginAtZero: true,

                                    ticks: {
                                        stepSize: 1000
                                    },

                                    grid: {
                                        display: false
                                    }

                                }

                            }

                        }

                    });

                }


                /*
                |--------------------------------------------------------------------------
                | PIE CHART
                |--------------------------------------------------------------------------
                */

                const pieCanvas =
                    document.getElementById("chartjs-dashboard-pie");

                if (pieCanvas && typeof Chart !== "undefined") {

                    new Chart(pieCanvas, {

                        type: "doughnut",

                        data: {

                            labels: [
                                "Chrome",
                                "Firefox",
                                "Other"
                            ],

                            datasets: [{

                                data: [
                                    4306,
                                    3801,
                                    1689
                                ],

                                backgroundColor: [
                                    "#3b7ddd",
                                    "#fcb92c",
                                    "#dc3545"
                                ],

                                borderWidth: 5

                            }]

                        },

                        options: {

                            responsive: true,

                            maintainAspectRatio: false,

                            plugins: {

                                legend: {
                                    display: false
                                }

                            },

                            cutout: "75%"

                        }

                    });

                }


                /*
                |--------------------------------------------------------------------------
                | BAR CHART
                |--------------------------------------------------------------------------
                */

                const barCanvas =
                    document.getElementById("chartjs-dashboard-bar");

                if (barCanvas && typeof Chart !== "undefined") {

                    new Chart(barCanvas, {

                        type: "bar",

                        data: {

                            labels: [
                                "Jan",
                                "Feb",
                                "Mar",
                                "Apr",
                                "May",
                                "Jun",
                                "Jul",
                                "Aug",
                                "Sep",
                                "Oct",
                                "Nov",
                                "Dec"
                            ],

                            datasets: [{

                                label: "This year",

                                backgroundColor: "#3b7ddd",

                                borderColor: "#3b7ddd",

                                hoverBackgroundColor: "#3b7ddd",

                                data: [
                                    54,
                                    67,
                                    41,
                                    55,
                                    62,
                                    45,
                                    55,
                                    73,
                                    60,
                                    76,
                                    48,
                                    79
                                ],

                                barPercentage: 0.75,

                                categoryPercentage: 0.5

                            }]

                        },

                        options: {

                            responsive: true,

                            maintainAspectRatio: false,

                            plugins: {

                                legend: {
                                    display: false
                                }

                            },

                            scales: {

                                y: {

                                    beginAtZero: true,

                                    ticks: {
                                        stepSize: 20
                                    },

                                    grid: {
                                        display: false
                                    }

                                },

                                x: {

                                    grid: {
                                        display: false
                                    }

                                }

                            }

                        }

                    });

                }


                /*
                |--------------------------------------------------------------------------
                | WORLD MAP
                |--------------------------------------------------------------------------
                */

                const mapElement =
                    document.getElementById("world_map");

                if (
                    mapElement &&
                    typeof jsVectorMap !== "undefined"
                ) {

                    const markers = [

                        {
                            coords: [31.230391, 121.473701],
                            name: "Shanghai"
                        },

                        {
                            coords: [28.704060, 77.102493],
                            name: "Delhi"
                        },

                        {
                            coords: [6.524379, 3.379206],
                            name: "Lagos"
                        },

                        {
                            coords: [35.689487, 139.691711],
                            name: "Tokyo"
                        },

                        {
                            coords: [23.129110, 113.264381],
                            name: "Guangzhou"
                        },

                        {
                            coords: [40.7127837, -74.0059413],
                            name: "New York"
                        },

                        {
                            coords: [34.052235, -118.243683],
                            name: "Los Angeles"
                        },

                        {
                            coords: [41.878113, -87.629799],
                            name: "Chicago"
                        },

                        {
                            coords: [51.507351, -0.127758],
                            name: "London"
                        },

                        {
                            coords: [40.416775, -3.703790],
                            name: "Madrid"
                        }

                    ];


                    new jsVectorMap({

                        map: "world",

                        selector: "#world_map",

                        zoomButtons: true,

                        zoomOnScroll: false,

                        markers: markers,

                        markerStyle: {

                            initial: {

                                r: 8,

                                strokeWidth: 7,

                                strokeOpacity: 0.4,

                                fill: "#3b7ddd"

                            },

                            hover: {

                                fill: "#3b7ddd",

                                stroke: "#3b7ddd"

                            }

                        }

                    });

                }


                /*
                |--------------------------------------------------------------------------
                | FLATPICKR
                |--------------------------------------------------------------------------
                */

                const datePicker =
                    document.getElementById(
                        "datetimepicker-dashboard"
                    );

                if (
                    datePicker &&
                    typeof flatpickr !== "undefined"
                ) {

                    const date =
                        new Date(
                            Date.now() -
                            5 * 24 * 60 * 60 * 1000
                        );

                    const defaultDate =
                        date.getFullYear() +
                        "-" +
                        String(
                            date.getMonth() + 1
                        ).padStart(2, "0") +
                        "-" +
                        String(
                            date.getDate()
                        ).padStart(2, "0");


                    flatpickr(
                        datePicker, {

                            inline: true,

                            prevArrow: "<span title=\"Previous month\">&laquo;</span>",

                            nextArrow: "<span title=\"Next month\">&raquo;</span>",

                            defaultDate: defaultDate

                        }
                    );

                }

            });
        </script>

</body>

</html>
