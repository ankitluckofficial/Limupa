@extends('backend.layout.main')

@section('title', 'Product List')

@section('content')

<div class="banner-page">

    <div class="banner-container">

        <!-- PAGE HEADER -->
        <div class="page-title">

            <div>
                <h2>Product Management</h2>
                <p>Manage all your store products from here</p>
            </div>

            <a href="{{ route('products.index') }}" class="add-banner-btn">
                <span class="btn-icon">
                    <i class="fas fa-plus"></i>
                </span>

                <span>Add Product</span>

                <i class="fas fa-arrow-right arrow-icon"></i>
            </a>

        </div>


        <!-- TABLE CARD -->
        <div class="banner-card">

            <div class="card-header">

                <div>
                    <h3>
                        <i class="fas fa-box"></i>
                        All Products
                    </h3>

                    <span>View and manage your product collection</span>
                </div>

            </div>


            <div class="table-wrapper">

                <table class="banner-table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>

                        {{-- DEMO PRODUCT DATA --}}
                        @php
                            $products = [
                                [
                                    'image' => 'images/products/product1.jpg',
                                    'name' => 'Premium T-Shirt',
                                    'description' => 'Comfortable premium cotton t-shirt',
                                    'price' => '₹999',
                                    'stock' => 45,
                                    'status' => 'active',
                                ],
                                [
                                    'image' => 'images/products/product2.jpg',
                                    'name' => 'Women Dress',
                                    'description' => 'Stylish modern women dress',
                                    'price' => '₹1,499',
                                    'stock' => 28,
                                    'status' => 'active',
                                ],
                                [
                                    'image' => 'images/products/product3.jpg',
                                    'name' => 'Running Shoes',
                                    'description' => 'Lightweight sports running shoes',
                                    'price' => '₹1,999',
                                    'stock' => 15,
                                    'status' => 'active',
                                ],
                                [
                                    'image' => 'images/products/product4.jpg',
                                    'name' => 'Winter Jacket',
                                    'description' => 'Warm and stylish winter jacket',
                                    'price' => '₹2,499',
                                    'stock' => 8,
                                    'status' => 'inactive',
                                ],
                                [
                                    'image' => 'images/products/product5.jpg',
                                    'name' => 'Smart Watch',
                                    'description' => 'Smart watch with multiple features',
                                    'price' => '₹2,999',
                                    'stock' => 32,
                                    'status' => 'active',
                                ],
                            ];
                        @endphp


                        @foreach ($products as $product)

                            <tr>

                                {{-- ID --}}
                                <td>
                                    {{ $loop->iteration }}
                                </td>


                                {{-- IMAGE --}}
                                <td>
                                    <div class="banner-image">

                                        <img
                                            src="{{ asset($product['image']) }}"
                                            alt="{{ $product['name'] }}"
                                            style="width: 65px; height: 65px; object-fit: cover; border-radius: 8px;"
                                        >

                                    </div>
                                </td>


                                {{-- NAME --}}
                                <td>
                                    <strong>
                                        {{ $product['name'] }}
                                    </strong>
                                </td>


                                {{-- DESCRIPTION --}}
                                <td>
                                    <small style="color:#888;">
                                        {{ $product['description'] }}
                                    </small>
                                </td>


                                {{-- PRICE --}}
                                <td>
                                    <strong>
                                        {{ $product['price'] }}
                                    </strong>
                                </td>


                                {{-- STOCK --}}
                                <td>

                                    @if ($product['stock'] > 20)

                                        <span class="position-badge">
                                            {{ $product['stock'] }} Available
                                        </span>

                                    @elseif ($product['stock'] > 0)

                                        <span class="discount-badge">
                                            {{ $product['stock'] }} Left
                                        </span>

                                    @else

                                        <span class="status inactive">
                                            <i class="fas fa-circle"></i>
                                            Out of Stock
                                        </span>

                                    @endif

                                </td>


                                {{-- STATUS --}}
                                <td>

                                    @if ($product['status'] == 'active')

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
                                        <a
                                            href="#"
                                            class="action-btn edit-btn"
                                            title="Edit"
                                        >
                                            <i class="fas fa-pen"></i>
                                        </a>


                                        {{-- Delete --}}
                                        <button
                                            type="button"
                                            class="action-btn delete-btn"
                                            title="Delete"
                                            onclick="return confirm('Delete this product?')"
                                        >
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
