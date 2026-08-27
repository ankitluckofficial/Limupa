@extends('backend.layout.main')

@section('title', 'Users List')

@section('content')



<div class="users-page">

    <div class="users-container">

        <!-- HEADER -->

        <div class="users-header">

            <div>
                <h2>User Management</h2>

                <p>
                    Manage all registered users from here
                </p>
            </div>

            {{-- <a
                href="{{ route('users.create') }}"
                class="add-user-btn"
            >
                <i class="fas fa-user-plus"></i>
                Add User
                <i class="fas fa-arrow-right"></i>
            </a> --}}

        </div>


        <!-- TABLE CARD -->

        <div class="users-card">

            <div class="users-card-header">

                <h3>
                    <i class="fas fa-users"></i>
                    All Users
                </h3>

                <span>
                    View and manage registered users
                </span>

            </div>


            <div class="users-table-wrapper">

                <table class="users-table">

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Name</th>

                            <th>Email</th>

                            <th>Phone</th>

                            <th>Role</th>

                            <th>Status</th>

                            <th>Created At</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>

                        {{-- DEMO USER DATA --}}

                        @php

                        $users = [

                            [
                                'id' => 1,
                                'name' => 'Rahul Sharma',
                                'email' => 'rahul@gmail.com',
                                'phone' => '9876543210',
                                'role' => 'Admin',
                                'status' => 'active',
                                'created_at' => '27 Aug 2026'
                            ],

                            [
                                'id' => 2,
                                'name' => 'Priya Singh',
                                'email' => 'priya@gmail.com',
                                'phone' => '9876543211',
                                'role' => 'Customer',
                                'status' => 'active',
                                'created_at' => '26 Aug 2026'
                            ],

                            [
                                'id' => 3,
                                'name' => 'Amit Kumar',
                                'email' => 'amit@gmail.com',
                                'phone' => '9876543212',
                                'role' => 'Staff',
                                'status' => 'active',
                                'created_at' => '25 Aug 2026'
                            ],

                            [
                                'id' => 4,
                                'name' => 'Neha Verma',
                                'email' => 'neha@gmail.com',
                                'phone' => '9876543213',
                                'role' => 'Customer',
                                'status' => 'inactive',
                                'created_at' => '24 Aug 2026'
                            ],

                            [
                                'id' => 5,
                                'name' => 'Vikas Yadav',
                                'email' => 'vikas@gmail.com',
                                'phone' => '9876543214',
                                'role' => 'Customer',
                                'status' => 'active',
                                'created_at' => '23 Aug 2026'
                            ]

                        ];

                        @endphp


                        @forelse($users as $user)

                        <tr>

                            <!-- ID -->

                            <td>
                                <strong>
                                    #{{ $user['id'] }}
                                </strong>
                            </td>


                            <!-- NAME -->

                            <td>

                                <div class="user-info">

                                    <div class="user-avatar">

                                        {{ strtoupper(substr($user['name'], 0, 1)) }}

                                    </div>

                                    <div>

                                        <div class="user-name">
                                            {{ $user['name'] }}
                                        </div>

                                        <div class="user-email">
                                            {{ $user['email'] }}
                                        </div>

                                    </div>

                                </div>

                            </td>


                            <!-- EMAIL -->

                            <td>
                                {{ $user['email'] }}
                            </td>


                            <!-- PHONE -->

                            <td>
                                {{ $user['phone'] }}
                            </td>


                            <!-- ROLE -->

                            <td>

                                @if($user['role'] == 'Admin')

                                    <span class="role-badge role-admin">
                                        <i class="fas fa-user-shield"></i>
                                        Admin
                                    </span>

                                @elseif($user['role'] == 'Staff')

                                    <span class="role-badge role-staff">
                                        <i class="fas fa-user-tie"></i>
                                        Staff
                                    </span>

                                @else

                                    <span class="role-badge role-customer">
                                        <i class="fas fa-user"></i>
                                        Customer
                                    </span>

                                @endif

                            </td>


                            <!-- STATUS -->

                            <td>

                                @if($user['status'] == 'active')

                                    <span class="user-status active">

                                        <i class="fas fa-circle"></i>

                                        Active

                                    </span>

                                @else

                                    <span class="user-status inactive">

                                        <i class="fas fa-circle"></i>

                                        Inactive

                                    </span>

                                @endif

                            </td>


                            <!-- CREATED -->

                            <td>

                                <span class="user-date">

                                    <i class="far fa-calendar-alt"></i>

                                    {{ $user['created_at'] }}

                                </span>

                            </td>


                            <!-- ACTIONS -->

                            <td>

                                <div class="user-actions">

                                    <!-- VIEW -->

                                    <a
                                        href="#"
                                        class="user-action-btn view-user-btn"
                                        title="View"
                                    >
                                        <i class="fas fa-eye"></i>
                                    </a>


                                    <!-- EDIT -->

                                    <a
                                        href="#"
                                        class="user-action-btn edit-user-btn"
                                        title="Edit"
                                    >
                                        <i class="fas fa-pen"></i>
                                    </a>


                                    <!-- DELETE -->

                                    <button
                                        type="button"
                                        class="user-action-btn delete-user-btn"
                                        title="Delete"
                                        onclick="return confirm('Delete this user?')"
                                    >
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="8"
                                class="users-empty"
                            >

                                <i class="fas fa-users"></i>

                                <h4>
                                    No Users Found
                                </h4>

                                <span>
                                    Add your first user to get started.
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
