@extends('leyout.main')

@section('content')

<div class="login-container">

    <h2>Login</h2>

    <form id="loginForm">

        @csrf

        <div class="form-group">
            <label>Email</label>

            <input
                type="email"
                name="email"
                id="email"
                class="form-control"
                required
            >
        </div>

        <div class="form-group">
            <label>Password</label>

            <input
                type="password"
                name="password"
                id="password"
                class="form-control"
                required
            >
        </div>

        <button type="submit" class="btn btn-primary">
            Login
        </button>

        <div class="mt-3">
            <a href="{{ route('password.request') }}">
                Forgot Password?
            </a>
        </div>

    </form>

    <div id="message"></div>

</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

$(document).ready(function () {

    $('#loginForm').submit(function (e) {

        e.preventDefault();

        let email = $('#email').val();
        let password = $('#password').val();

        $('#message').html(
            '<p style="color:blue;">Logging in...</p>'
        );

        $.ajax({

            url: 'http://127.0.0.1:8001/login',

            type: 'POST',

            data: {
                email: email,
                password: password
            },

            success: function (response) {

                console.log("LOGIN RESPONSE:", response);

                if (response.success === true) {

                    $('#message').html(
                        '<p style="color:green;">' +
                        response.message +
                        '</p>'
                    );

                    // Login successful
                    window.location.href = "/";

                } else {

                    $('#message').html(
                        '<p style="color:red;">' +
                        response.message +
                        '</p>'
                    );

                }

            },

            error: function (xhr) {

                console.log("LOGIN ERROR:", xhr);
                console.log("STATUS:", xhr.status);
                console.log("RESPONSE:", xhr.responseText);

                let message = "Login failed";

                if (xhr.responseJSON) {

                    if (xhr.responseJSON.detail) {
                        message = xhr.responseJSON.detail;
                    }

                    if (xhr.responseJSON.message) {
                        message = xhr.responseJSON.message;
                    }
                }

                $('#message').html(
                    '<p style="color:red;">' +
                    message +
                    '</p>'
                );

            }

        });

    });

});

</script>

@endsection
