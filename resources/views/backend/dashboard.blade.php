@extends('backend.layout.main')

@section('title', 'Dashboard')

@section('content')
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
                            <h5 class="card-title">Sales</h5>
                            <h1 class="mt-1 mb-3">2,382</h1>
                            <div class="mb-0">
                                <span class="text-success">
                                    <i data-feather="arrow-up"></i> 5.25%
                                </span>
                                <span class="text-muted">Since last week</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Visitors --}}
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Visitors</h5>
                            <h1 class="mt-1 mb-3">14,212</h1>
                            <div class="mb-0">
                                <span class="text-success">
                                    <i data-feather="arrow-up"></i> 8.12%
                                </span>
                                <span class="text-muted">Since last week</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Earnings --}}
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Earnings</h5>
                            <h1 class="mt-1 mb-3">$21,300</h1>
                            <div class="mb-0">
                                <span class="text-success">
                                    <i data-feather="arrow-up"></i> 4.25%
                                </span>
                                <span class="text-muted">Since last week</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Orders --}}
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Orders</h5>
                            <h1 class="mt-1 mb-3">64</h1>
                            <div class="mb-0">
                                <span class="text-danger">
                                    <i data-feather="arrow-down"></i> -2.25%
                                </span>
                                <span class="text-muted">Since last week</span>
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
                            <h5 class="card-title mb-0">Sales Overview</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="chartjs-dashboard-line"></canvas>
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
                            <h5 class="card-title mb-0">Browser Usage</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart chart-sm">
                                <canvas id="chartjs-dashboard-pie"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bar --}}
                <div class="col-12 col-md-6">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Monthly Orders</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="chartjs-dashboard-bar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> {{-- container-fluid --}}
    </main>
@endsection
