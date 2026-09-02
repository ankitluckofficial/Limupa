@extends("leyout.main")

@section('content')

<div class="register-box">

    <h2>Register</h2>

    <form id="registerForm">

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input
                type="text"
                name="name"
                id="name"
                class="form-control"
                required
            >
        </div>

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

        <div class="form-group">
            <label>Confirm Password</label>
            <input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                class="form-control"
                required
            >
        </div>

        <button type="submit" class="btn-submit">
            Register
        </button>

    </form>

    <div id="message"></div>

</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

$(document).ready(function () {

    $('#registerForm').submit(function (e) {

        e.preventDefault();

        let name = $('#name').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let password_confirmation = $('#password_confirmation').val();

        // Password confirmation
        if (password !== password_confirmation) {

            $('#message').html(
                '<p style="color:red;">Passwords do not match</p>'
            );

            return;
        }

        // Show loading
        $('#message').html(
            '<p style="color:blue;">Registering...</p>'
        );

        $.ajax({

            url: 'http://127.0.0.1:8001/register',

            type: 'POST',

            data: {
                name: name,
                email: email,
                password: password
            },

            success: function (response) {

                console.log("SUCCESS:", response);

                if (response.success === true) {

                    $('#message').html(
                        '<p style="color:green;">' +
                        response.message +
                        '</p>'
                    );

                    $('#registerForm')[0].reset();

                } else {

                    $('#message').html(
                        '<p style="color:red;">' +
                        (response.message || 'Registration failed') +
                        '</p>'
                    );
                }
            },

            error: function (xhr) {

                console.log("ERROR:", xhr);
                console.log("STATUS:", xhr.status);
                console.log("RESPONSE:", xhr.responseText);

                let message = 'Registration failed';

                // FastAPI JSON error
                if (xhr.responseJSON && xhr.responseJSON.detail) {
                    message = xhr.responseJSON.detail;
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
