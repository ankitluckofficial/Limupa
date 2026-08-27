@extends('backend.layout.main')

@section('title', 'Store Information List')

@section('content')


<div class="store-table-page">

    <div class="store-table-container">

        <!-- PAGE HEADER -->
        <div class="store-table-header">

            <div>
                <h2>Store Information</h2>

                <p>
                    View and manage your store information
                </p>
            </div>

            <a
                href="{{ route('settings.index') }}"
                class="store-add-btn"
            >
                <i class="fas fa-plus"></i>
                Add Store Information
            </a>

        </div>


        <!-- TABLE CARD -->
        <div class="store-table-card">

            <div class="store-table-card-header">

                <h3>
                    <i class="fas fa-store"></i>
                    Store Details
                </h3>

                <p>
                    All store information is displayed here
                </p>

            </div>


            <div class="store-table-wrapper">

                <table class="store-table">

                    <thead>

                        <tr>

                            <th>#</th>

                            <th>Logo</th>

                            <th>Store</th>

                            <th>Phone</th>

                            <th>Address</th>

                            <th>City</th>

                            <th>Status</th>

                            <th>Action</th>

                        </tr>

                    </thead>


                    <tbody>

                        {{-- DEMO STORE DATA --}}

                        @php

                        $stores = [

                            [
                                'logo' => 'images/logo/store1.png',
                                'name' => 'My Fashion Store',
                                'email' => 'info@myfashion.com',
                                'phone' => '+91 9876543210',
                                'address' => 'Main Market, Civil Lines',
                                'city' => 'Prayagraj',
                                'status' => 'active',
                            ],

                            [
                                'logo' => 'images/logo/store2.png',
                                'name' => 'Style Hub',
                                'email' => 'hello@stylehub.com',
                                'phone' => '+91 9123456780',
                                'address' => 'MG Road, Market Area',
                                'city' => 'Lucknow',
                                'status' => 'active',
                            ],

                        ];

                        @endphp


                        @foreach($stores as $store)

                        <tr>

                            <!-- ID -->

                            <td>
                                {{ $loop->iteration }}
                            </td>


                            <!-- LOGO -->

                            <td>

                                <img
                                    src="{{ asset($store['logo']) }}"
                                    alt="{{ $store['name'] }}"
                                    class="store-table-logo"
                                >

                            </td>


                            <!-- STORE -->

                            <td>

                                <span class="store-name">
                                    {{ $store['name'] }}
                                </span>

                                <span class="store-email">
                                    {{ $store['email'] }}
                                </span>

                            </td>


                            <!-- PHONE -->

                            <td>
                                {{ $store['phone'] }}
                            </td>


                            <!-- ADDRESS -->

                            <td>
                                {{ $store['address'] }}
                            </td>


                            <!-- CITY -->

                            <td>
                                {{ $store['city'] }}
                            </td>


                            <!-- STATUS -->

                            <td>

                                @if($store['status'] == 'active')

                                    <span class="store-status active">
                                        <i class="fas fa-circle"></i>
                                        Active
                                    </span>

                                @else

                                    <span class="store-status inactive">
                                        <i class="fas fa-circle"></i>
                                        Inactive
                                    </span>

                                @endif

                            </td>


                            <!-- ACTION -->

                            <td>

                                <div class="store-actions">

                                    <!-- EDIT -->

                                    <a
                                        href="#"
                                        class="store-action store-edit"
                                        title="Edit"
                                    >
                                        <i class="fas fa-pen"></i>
                                    </a>


                                    <!-- DELETE -->

                                    <button
                                        type="button"
                                        class="store-action store-delete"
                                        title="Delete"
                                        onclick="return confirm('Delete this store information?')"
                                    >
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>

                        @endforeach


                        @if(count($stores) == 0)

                        <tr>
                            <td colspan="8" class="store-empty">
                                <i class="fas fa-store"></i>
                                <br>
                                No store information found.
                            </td>
                        </tr>

                        @endif

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection
