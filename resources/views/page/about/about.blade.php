@extends('backend.layout.main')

@section('title', 'About Us List')

@section('content')

<style>

/* ================================
   ABOUT LIST PAGE
================================ */

.about-list-page {
    padding: 30px;
    background: #f6f7f9;
    min-height: 100vh;
}

.about-list-container {
    max-width: 1250px;
    margin: auto;
}


/* HEADER */

.about-list-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 25px;
}

.about-list-header h2 {
    margin: 0;
    font-size: 28px;
    font-weight: 700;
    color: #222;
}

.about-list-header p {
    margin: 6px 0 0;
    color: #888;
    font-size: 13px;
}


/* ADD BUTTON */

.about-add-btn {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 12px 18px;
    background: #222;
    color: #fff !important;
    text-decoration: none;
    border-radius: 9px;
    font-size: 13px;
    font-weight: 600;
    transition: .2s;
}

.about-add-btn:hover {
    background: #000;
    transform: translateY(-1px);
}


/* CARD */

.about-list-card {
    background: #fff;
    border: 1px solid #e5e5e5;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 7px 25px rgba(0,0,0,.05);
}


/* CARD HEADER */

.about-list-card-header {
    padding: 20px 25px;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.about-list-card-header h3 {
    margin: 0;
    font-size: 17px;
    color: #222;
}

.about-list-card-header span {
    display: block;
    margin-top: 4px;
    color: #999;
    font-size: 11px;
}


/* TABLE */

.about-table-wrapper {
    width: 100%;
    overflow-x: auto;
}

.about-table {
    width: 100%;
    min-width: 1050px;
    border-collapse: collapse;
}

.about-table th {
    padding: 15px 16px;
    background: #fafafa;
    border-bottom: 1px solid #eee;
    color: #777;
    text-align: left;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    white-space: nowrap;
}

.about-table td {
    padding: 15px 16px;
    border-bottom: 1px solid #f0f0f0;
    color: #444;
    font-size: 13px;
    vertical-align: middle;
}

.about-table tbody tr:hover {
    background: #fafafa;
}


/* IMAGE */

.about-table-image {
    width: 75px;
    height: 55px;
    border-radius: 8px;
    object-fit: cover;
    border: 1px solid #eee;
}


/* TITLE */

.about-title {
    font-weight: 700;
    color: #222;
}

.about-subtitle {
    display: block;
    margin-top: 4px;
    color: #999;
    font-size: 11px;
}


/* DESCRIPTION */

.about-description {
    max-width: 240px;
    color: #777;
    line-height: 1.5;
}


/* FEATURE */

.about-feature-list {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.about-feature-list span {
    color: #666;
    font-size: 11px;
}

.about-feature-list i {
    margin-right: 5px;
    font-size: 8px;
}


/* STAT */

.about-stat {
    display: inline-block;
    margin: 2px 0;
    padding: 4px 8px;
    background: #f3f3f3;
    border-radius: 5px;
    color: #555;
    font-size: 10px;
}


/* STATUS */

.about-status {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
}

.about-status i {
    font-size: 7px;
}

.about-status.active {
    background: #e9f8ef;
    color: #168447;
}

.about-status.inactive {
    background: #fcecec;
    color: #d43b3b;
}


/* ACTION */

.about-actions {
    display: flex;
    align-items: center;
    gap: 7px;
}

.about-action-btn {
    width: 34px;
    height: 34px;
    border-radius: 7px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    border: none;
    cursor: pointer;
    font-size: 12px;
}


/* VIEW */

.about-view-btn {
    background: #f1f3f5;
    color: #444;
}

.about-view-btn:hover {
    background: #222;
    color: #fff;
}


/* EDIT */

.about-edit-btn {
    background: #fff4df;
    color: #b87900;
}

.about-edit-btn:hover {
    background: #f0a500;
    color: #fff;
}


/* DELETE */

.about-delete-btn {
    background: #fff0f0;
    color: #d93636;
}

.about-delete-btn:hover {
    background: #d93636;
    color: #fff;
}


/* EMPTY */

.about-empty {
    text-align: center;
    padding: 60px 20px;
    color: #999;
}

.about-empty i {
    font-size: 40px;
    margin-bottom: 12px;
    display: block;
}

.about-empty h4 {
    margin: 0 0 5px;
    color: #555;
}


/* RESPONSIVE */

@media(max-width: 768px) {

    .about-list-page {
        padding: 15px;
    }

    .about-list-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .about-add-btn {
        width: 100%;
        justify-content: center;
    }

    .about-list-card-header {
        padding: 17px;
    }
}

</style>


<div class="about-list-page">

    <div class="about-list-container">


        <!-- HEADER -->

        <div class="about-list-header">

            <div>

                <h2>
                    About Us Management
                </h2>

                <p>
                    View and manage your store About Us information
                </p>

            </div>


            <a
                href="{{ route('about.index') }}"
                class="about-add-btn"
            >

                <i class="fas fa-plus"></i>

                Add About Us

                <i class="fas fa-arrow-right"></i>

            </a>

        </div>


        <!-- TABLE CARD -->

        <div class="about-list-card">


            <!-- CARD HEADER -->

            <div class="about-list-card-header">

                <div>

                    <h3>
                        <i class="fas fa-info-circle"></i>
                        About Us Records
                    </h3>

                    <span>
                        Manage your About Us content
                    </span>

                </div>

            </div>


            <!-- TABLE -->

            <div class="about-table-wrapper">

                <table class="about-table">

                    <thead>

                        <tr>

                            <th>#</th>

                            <th>Image</th>

                            <th>About</th>

                            <th>Description</th>

                            <th>Mission</th>

                            <th>Vision</th>

                            <th>Why Choose Us</th>

                            <th>Statistics</th>

                            <th>Status</th>

                            <th>Action</th>

                        </tr>

                    </thead>


                    <tbody>


                    {{-- ============================
                         DEMO DATA
                    ============================= --}}

                    @php

                    $abouts = [

                        [
                            'image' => 'images/about/about.jpg',

                            'title' => 'About Our Store',

                            'subtitle' =>
                                'Your trusted online shopping partner',

                            'description' =>
                                'We provide quality products with a simple and reliable online shopping experience.',

                            'mission' =>
                                'To provide quality products at affordable prices.',

                            'vision' =>
                                'To become a trusted online shopping destination.',

                            'features' => [
                                'Premium Quality',
                                'Fast Delivery',
                                'Secure Payment',
                                'Easy Returns'
                            ],

                            'experience' => '10+ Years',

                            'customers' => '10,000+',

                            'products' => '500+',

                            'orders' => '25,000+',

                            'status' => 'active'
                        ],

                        [
                            'image' => 'images/about/about2.jpg',

                            'title' => 'Who We Are',

                            'subtitle' =>
                                'Shopping made simple',

                            'description' =>
                                'Our store focuses on quality products, great service and customer satisfaction.',

                            'mission' =>
                                'Deliver the best shopping experience.',

                            'vision' =>
                                'Build a strong and trusted e-commerce brand.',

                            'features' => [
                                'Quality Products',
                                'Quick Delivery',
                                'Trusted Service',
                                'Customer Support'
                            ],

                            'experience' => '5+ Years',

                            'customers' => '5,000+',

                            'products' => '300+',

                            'orders' => '12,000+',

                            'status' => 'inactive'
                        ]

                    ];

                    @endphp


                    @forelse($abouts as $about)

                        <tr>


                            <!-- ID -->

                            <td>
                                {{ $loop->iteration }}
                            </td>


                            <!-- IMAGE -->

                            <td>

                                <img
                                    src="{{ asset($about['image']) }}"
                                    alt="{{ $about['title'] }}"
                                    class="about-table-image"
                                >

                            </td>


                            <!-- ABOUT -->

                            <td>

                                <span class="about-title">
                                    {{ $about['title'] }}
                                </span>

                                <span class="about-subtitle">
                                    {{ $about['subtitle'] }}
                                </span>

                            </td>


                            <!-- DESCRIPTION -->

                            <td>

                                <div class="about-description">

                                    {{ \Illuminate\Support\Str::limit(
                                        $about['description'],
                                        90
                                    ) }}

                                </div>

                            </td>


                            <!-- MISSION -->

                            <td>

                                <div class="about-description">

                                    {{ \Illuminate\Support\Str::limit(
                                        $about['mission'],
                                        65
                                    ) }}

                                </div>

                            </td>


                            <!-- VISION -->

                            <td>

                                <div class="about-description">

                                    {{ \Illuminate\Support\Str::limit(
                                        $about['vision'],
                                        65
                                    ) }}

                                </div>

                            </td>


                            <!-- FEATURES -->

                            <td>

                                <div class="about-feature-list">

                                    @foreach(
                                        array_slice(
                                            $about['features'],
                                            0,
                                            4
                                        )
                                        as $feature
                                    )

                                        <span>

                                            <i class="fas fa-check"></i>

                                            {{ $feature }}

                                        </span>

                                    @endforeach

                                </div>

                            </td>


                            <!-- STATISTICS -->

                            <td>

                                <span class="about-stat">

                                    <i class="fas fa-calendar"></i>

                                    {{ $about['experience'] }}

                                </span>

                                <br>

                                <span class="about-stat">

                                    <i class="fas fa-users"></i>

                                    {{ $about['customers'] }}

                                </span>

                                <br>

                                <span class="about-stat">

                                    <i class="fas fa-box"></i>

                                    {{ $about['products'] }}

                                </span>

                                <br>

                                <span class="about-stat">

                                    <i class="fas fa-shopping-cart"></i>

                                    {{ $about['orders'] }}

                                </span>

                            </td>


                            <!-- STATUS -->

                            <td>

                                @if($about['status'] === 'active')

                                    <span class="about-status active">

                                        <i class="fas fa-circle"></i>

                                        Active

                                    </span>

                                @else

                                    <span class="about-status inactive">

                                        <i class="fas fa-circle"></i>

                                        Inactive

                                    </span>

                                @endif

                            </td>


                            <!-- ACTION -->

                            <td>

                                <div class="about-actions">


                                    <!-- VIEW -->

                                    <a
                                        href="#"
                                        class="about-action-btn about-view-btn"
                                        title="View"
                                    >

                                        <i class="fas fa-eye"></i>

                                    </a>


                                    <!-- EDIT -->

                                    <a
                                        href="#"
                                        class="about-action-btn about-edit-btn"
                                        title="Edit"
                                    >

                                        <i class="fas fa-pen"></i>

                                    </a>


                                    <!-- DELETE -->

                                    <button
                                        type="button"
                                        class="about-action-btn about-delete-btn"
                                        title="Delete"
                                        onclick="return confirm('Delete this About Us record?')"
                                    >

                                        <i class="fas fa-trash"></i>

                                    </button>


                                </div>

                            </td>


                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="10"
                                class="about-empty"
                            >

                                <i class="fas fa-info-circle"></i>

                                <h4>
                                    No About Us information found
                                </h4>

                                <span>
                                    Add your first About Us record.
                                </span>

                            </td>

                        </tr>

                    @endforelse


                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection
