@extends('backend.layout.main')

@section('title', 'Banner List')

@section('content')

    <div class="banner-page">

        <div class="banner-container">

            <!-- PAGE HEADER -->
            <div class="page-title">

                <div>
                    <h2>Banner Management</h2>
                    <p>Manage all your website banners from here</p>
                </div>

                <a href="{{ route('banners.index') }}" class="add-banner-btn">
                    <span class="btn-icon">
                        <i class="fas fa-plus"></i>
                    </span>

                    <span>Add Banner</span>

                    <i class="fas fa-arrow-right arrow-icon"></i>
                </a>

            </div>


            <!-- TABLE CARD -->
            <div class="banner-card">

                <div class="card-header">

                    <div>
                        <h3>
                            <i class="fas fa-images"></i>
                            All Banners
                        </h3>

                        <span>View and manage your banner collection</span>
                    </div>

                </div>


                <div class="table-wrapper">

                    <table class="banner-table">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Banner</th>
                                <th>Title</th>
                                <th>Product</th>
                                <th>Discount</th>
                                <th>Price</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            {{-- FAKE / DEMO BANNER DATA --}}

                            @php
                                $banners = [
                                    [
                                        'image' => 'images/banner/banner1.jpg',
                                        'title' => 'Summer Sale',
                                        'sale_text' => 'Limited Time Offer',
                                        'product_name' => 'Premium T-Shirt',
                                        'discount' => '40% OFF',
                                        'price' => '₹999',
                                        'position' => 'home_top',
                                        'status' => 'active',
                                    ],
                                    [
                                        'image' => 'images/banner/banner2.jpg',
                                        'title' => 'Fashion Week',
                                        'sale_text' => 'New Collection',
                                        'product_name' => 'Women Dress',
                                        'discount' => '30% OFF',
                                        'price' => '₹1,499',
                                        'position' => 'home_middle',
                                        'status' => 'active',
                                    ],
                                    [
                                        'image' => 'images/banner/banner3.jpg',
                                        'title' => 'Mega Discount',
                                        'sale_text' => 'Grab It Now',
                                        'product_name' => 'Running Shoes',
                                        'discount' => '50% OFF',
                                        'price' => '₹1,999',
                                        'position' => 'home_bottom',
                                        'status' => 'inactive',
                                    ],
                                    [
                                        'image' => 'images/banner/banner4.jpg',
                                        'title' => 'Winter Collection',
                                        'sale_text' => 'Stay Stylish',
                                        'product_name' => 'Winter Jacket',
                                        'discount' => '25% OFF',
                                        'price' => '₹2,499',
                                        'position' => 'sidebar',
                                        'status' => 'active',
                                    ],
                                    [
                                        'image' => 'images/banner/banner5.jpg',
                                        'title' => 'Flash Sale',
                                        'sale_text' => 'Today Only',
                                        'product_name' => 'Smart Watch',
                                        'discount' => '60% OFF',
                                        'price' => '₹2,999',
                                        'position' => 'home_top',
                                        'status' => 'inactive',
                                    ],
                                ];
                            @endphp

                            @foreach ($banners as $banner)
                                <tr>

                                    {{-- ID --}}
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    {{-- IMAGE --}}
                                    <td>
                                        <div class="banner-image">
                                            <img src="{{ asset($banner['image']) }}" alt="{{ $banner['title'] }}"
                                                style="width: 90px; height: 55px; object-fit: cover; border-radius: 8px;">
                                        </div>
                                    </td>

                                    {{-- TITLE --}}
                                    <td>
                                        <strong>{{ $banner['title'] }}</strong>
                                        <small style="display:block; color:#888;">
                                            {{ $banner['sale_text'] }}
                                        </small>
                                    </td>

                                    {{-- PRODUCT --}}
                                    <td>
                                        {{ $banner['product_name'] }}
                                    </td>

                                    {{-- DISCOUNT --}}
                                    <td>
                                        <span class="discount-badge">
                                            {{ $banner['discount'] }}
                                        </span>
                                    </td>

                                    {{-- PRICE --}}
                                    <td>
                                        <strong>
                                            {{ $banner['price'] }}
                                        </strong>
                                    </td>

                                    {{-- POSITION --}}
                                    <td>
                                        <span class="position-badge">
                                            {{ ucfirst(str_replace('_', ' ', $banner['position'])) }}
                                        </span>
                                    </td>

                                    {{-- STATUS --}}
                                    <td>

                                        @if ($banner['status'] == 'active')
                                            <span class="status active">
                                                <i class="fas fa-circle"></i>
                                                Active
                                            </span>
                                        @else
                                            <span class="status inactive">
                                                <i class="fas fa-circle"></i>
                                                Inactive
                                            </span>
                                        @endif

                                    </td>

                                    {{-- ACTION --}}
                                    <td>

                                        <div class="action-buttons">

                                            {{-- Edit --}}
                                            {{-- <a href="{{ route('banners.edit') }}" class="action-btn edit-btn"
                                                title="Edit">
                                                <i class="fas fa-pen"></i>
                                            </a> --}}

                                            {{-- Delete --}}
                                            <button type="button" class="action-btn delete-btn" title="Delete"
                                                onclick="return confirm('Delete this banner?')">
                                                <i class="fas fa-trash"></i>
                                            </button>

                                        </div>

                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

@endsection
