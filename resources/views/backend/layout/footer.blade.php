
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
