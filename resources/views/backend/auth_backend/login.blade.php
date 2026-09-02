<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login - Limupa</title>

    <link
        rel="shortcut icon"
        href="{{ asset('images/favicon.png') }}"
    >


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {

            min-height: 100vh;

            font-family: Arial, sans-serif;

            background: #f4f6fb;

            display: flex;

            align-items: center;

            justify-content: center;

        }


        .login-page {

            width: 100%;

            min-height: 100vh;

            display: flex;

        }


        /* =========================
           LEFT IMAGE
        ========================= */

        .login-image {

            width: 55%;

            background:
                linear-gradient(
                    rgba(10, 20, 45, .72),
                    rgba(49, 46, 129, .85)
                ),
                url("{{ asset('images/login-bg.jpg') }}")
                center / cover no-repeat;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 60px;

            color: white;

        }


        .image-content {

            max-width: 550px;

        }


        .image-content img {

            width: 85px;

            height: 85px;

            object-fit: contain;

            margin-bottom: 25px;

        }


        .image-content h1 {

            font-size: 48px;

            line-height: 1.15;

            margin-bottom: 18px;

        }


        .image-content h1 span {

            color: #8b7cff;

        }


        .image-content h2 {

            margin-bottom: 15px;

            font-size: 28px;

        }


        .image-content p {

            color: #dbe3f5;

            font-size: 16px;

            line-height: 1.7;

        }


        /* =========================
           LOGIN SECTION
        ========================= */

        .login-section {

            width: 45%;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 40px;

            background: #fff;

        }


        .login-box {

            width: 100%;

            max-width: 420px;

        }


        .logo {

            width: 65px;

            height: 65px;

            object-fit: contain;

            margin-bottom: 25px;

        }


        .login-box h2 {

            font-size: 32px;

            color: #111827;

            margin-bottom: 8px;

        }


        .login-box .subtitle {

            color: #6b7280;

            font-size: 14px;

            margin-bottom: 32px;

            line-height: 1.6;

        }


        /* =========================
           MESSAGE
        ========================= */

        #message {

            margin-bottom: 20px;

        }


        .success-message {

            background: #ecfdf5;

            border: 1px solid #a7f3d0;

            color: #047857;

            padding: 12px;

            border-radius: 8px;

            font-size: 13px;

        }


        .error-message {

            background: #fff1f2;

            border: 1px solid #fecdd3;

            color: #be123c;

            padding: 12px;

            border-radius: 8px;

            font-size: 13px;

        }


        .loading-message {

            background: #eff6ff;

            border: 1px solid #bfdbfe;

            color: #1d4ed8;

            padding: 12px;

            border-radius: 8px;

            font-size: 13px;

        }


        /* =========================
           FORM
        ========================= */

        .form-group {

            margin-bottom: 20px;

        }


        .form-group label {

            display: block;

            color: #374151;

            font-size: 14px;

            font-weight: 600;

            margin-bottom: 8px;

        }


        .input-box {

            position: relative;

        }


        .input-box .icon {

            position: absolute;

            left: 15px;

            top: 50%;

            transform: translateY(-50%);

            color: #9ca3af;

            font-size: 17px;

        }


        .form-control {

            width: 100%;

            height: 54px;

            border: 1px solid #e5e7eb;

            border-radius: 10px;

            background: #f9fafb;

            padding: 0 15px 0 45px;

            font-size: 14px;

            outline: none;

            transition: .3s;

        }


        .form-control:focus {

            background: white;

            border-color: #6366f1;

            box-shadow:
                0 0 0 4px
                rgba(99, 102, 241, .10);

        }


        .password {

            padding-right: 65px;

        }


        /* =========================
           SHOW PASSWORD
        ========================= */

        .show-btn {

            position: absolute;

            right: 14px;

            top: 50%;

            transform: translateY(-50%);

            border: none;

            background: none;

            color: #6366f1;

            font-size: 12px;

            font-weight: bold;

            cursor: pointer;

        }


        .show-btn:hover {

            color: #4f46e5;

        }


        /* =========================
           OPTIONS
        ========================= */

        .options {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin: 8px 0 25px;

            font-size: 13px;

        }


        .remember {

            display: flex;

            align-items: center;

            gap: 7px;

            color: #6b7280;

        }


        .remember input {

            accent-color: #6366f1;

        }


        .forgot {

            color: #6366f1;

            text-decoration: none;

            font-weight: 600;

        }


        .forgot:hover {

            text-decoration: underline;

        }


        /* =========================
           LOGIN BUTTON
        ========================= */

        .login-btn {

            width: 100%;

            height: 54px;

            border: none;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    #6366f1,
                    #7c3aed
                );

            color: white;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            transition: .3s;

        }


        .login-btn:hover {

            transform: translateY(-2px);

            box-shadow:
                0 12px 25px
                rgba(99, 102, 241, .30);

        }


        .login-btn:disabled {

            opacity: .7;

            cursor: not-allowed;

            transform: none;

            box-shadow: none;

        }


        /* =========================
           BOTTOM
        ========================= */

        .bottom {

            text-align: center;

            margin-top: 25px;

            color: #9ca3af;

            font-size: 12px;

        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 850px) {

            .login-page {

                display: block;

            }


            .login-image {

                width: 100%;

                min-height: 300px;

                padding: 40px;

            }


            .image-content h1 {

                font-size: 34px;

            }


            .login-section {

                width: 100%;

                min-height: 500px;

                padding: 35px 25px;

            }

        }


        @media (max-width: 500px) {

            .login-image {

                min-height: 240px;

                padding: 30px;

            }


            .image-content img {

                width: 60px;

                height: 60px;

            }


            .image-content h1 {

                font-size: 28px;

            }


            .image-content h2 {

                font-size: 22px;

            }


            .image-content p {

                display: none;

            }


            .login-section {

                padding: 30px 20px;

            }


            .login-box h2 {

                font-size: 27px;

            }

        }

    </style>

</head>


<body>


<div class="login-page">


    <!-- =====================================
         LEFT IMAGE
    ====================================== -->

    <div class="login-image">

        <div class="image-content">

            <img
                src="{{ asset('images/menu/logo/2.jpg') }}"
                alt="Limupa Logo"
            >


            <h1>

                Welcome to
                <span>Limupa</span>

            </h1>


            <h2>
                Admin Dashboard
            </h2>


            <p>

                Manage products, customers, orders,
                reports, and all your business activities
                from one powerful dashboard.

            </p>

        </div>

    </div>



    <!-- =====================================
         LOGIN SECTION
    ====================================== -->

    <div class="login-section">

        <div class="login-box">


            <img
                class="logo"
                src="{{ asset('images/menu/logo/1.jpg') }}"
                alt="Limupa Logo"
            >


            <h2>
                Sign in
            </h2>


            <p class="subtitle">

                Sign in to access your Limupa Admin
                Dashboard and manage your online store.

            </p>


            <!-- =====================================
                 MESSAGE
            ====================================== -->

            <div id="message"></div>



            <!-- =====================================
                 ADMIN LOGIN FORM
            ====================================== -->

            <form id="loginForm">


                @csrf


                <!-- EMAIL -->

                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>


                    <div class="input-box">

                        <span class="icon">
                            ✉
                        </span>


                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-control"
                            placeholder="admin@example.com"
                            autocomplete="email"
                            required
                        >

                    </div>

                </div>



                <!-- PASSWORD -->

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>


                    <div class="input-box">

                        <span class="icon">
                            🔒
                        </span>


                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control password"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required
                        >


                        <button
                            type="button"
                            class="show-btn"
                            id="showPassword"
                            onclick="togglePassword()"
                        >
                            Show
                        </button>

                    </div>

                </div>



                <!-- OPTIONS -->

                <div class="options">


                    <label class="remember">

                        <input
                            type="checkbox"
                            name="remember"
                            value="1"
                        >

                        Remember me

                    </label>


                    <a
                        href="{{ route('password.request') }}"
                        class="forgot"
                    >
                        Forgot password?
                    </a>

                </div>



                <!-- LOGIN BUTTON -->

                <button
                    type="submit"
                    class="login-btn"
                    id="loginButton"
                >

                    Login to Dashboard

                </button>


            </form>



            <div class="bottom">

                © {{ date('Y') }} Limupa Admin Dashboard

            </div>


        </div>

    </div>

</div>



<!-- =====================================
     JQUERY
====================================== -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>



<script>


    // =====================================
    // SHOW / HIDE PASSWORD
    // =====================================

    function togglePassword() {

        const password =
            document.getElementById('password');

        const button =
            document.getElementById('showPassword');


        if (password.type === 'password') {

            password.type = 'text';

            button.innerText = 'Hide';

        } else {

            password.type = 'password';

            button.innerText = 'Show';

        }

    }



    // =====================================
    // ADMIN LOGIN
    // =====================================

    $(document).ready(function () {


        $('#loginForm').on('submit', function (e) {

            e.preventDefault();


            const email =
                $('#email').val().trim();


            const password =
                $('#password').val();


            // =================================
            // VALIDATION
            // =================================

            if (email === '') {

                $('#message').html(
                    '<div class="error-message">' +
                    'Please enter your email address.' +
                    '</div>'
                );

                return;

            }


            if (password === '') {

                $('#message').html(
                    '<div class="error-message">' +
                    'Please enter your password.' +
                    '</div>'
                );

                return;

            }



            // =================================
            // BUTTON LOADING
            // =================================

            $('#loginButton')
                .prop('disabled', true)
                .text('Logging in...');


            $('#message').html(
                '<div class="loading-message">' +
                'Checking admin login...' +
                '</div>'
            );



            // =================================
            // FASTAPI REQUEST
            // =================================

            $.ajax({

                url:
                    'http://127.0.0.1:8001/admin/login',

                type: 'POST',

                data: {

                    email: email,

                    password: password

                },


                // =================================
                // SUCCESS
                // =================================

                success: function (response) {

                    console.log(
                        'ADMIN LOGIN RESPONSE:',
                        response
                    );


                    if (response.success === true) {


                        $('#message').html(
                            '<div class="success-message">' +
                            response.message +
                            '</div>'
                        );


                        // =========================
                        // ADMIN DASHBOARD
                        // =========================

                        setTimeout(function () {

                            window.location.href =
                                "{{ route('admin.dashboard') }}";

                        }, 500);


                    } else {


                        $('#message').html(
                            '<div class="error-message">' +
                            (
                                response.message ||
                                'Admin login failed.'
                            ) +
                            '</div>'
                        );


                        $('#loginButton')
                            .prop('disabled', false)
                            .text('Login to Dashboard');

                    }

                },


                // =================================
                // ERROR
                // =================================

                error: function (xhr) {

                    console.log(
                        'ADMIN LOGIN ERROR:',
                        xhr
                    );


                    console.log(
                        'STATUS:',
                        xhr.status
                    );


                    console.log(
                        'RESPONSE:',
                        xhr.responseText
                    );


                    let message =
                        'Unable to connect to FastAPI server.';


                    if (xhr.responseJSON) {


                        if (
                            xhr.responseJSON.message
                        ) {

                            message =
                                xhr.responseJSON.message;

                        }


                        else if (
                            xhr.responseJSON.detail
                        ) {

                            message =
                                xhr.responseJSON.detail;

                        }

                    }


                    $('#message').html(
                        '<div class="error-message">' +
                        message +
                        '</div>'
                    );


                    $('#loginButton')
                        .prop('disabled', false)
                        .text('Login to Dashboard');

                }

            });

        });

    });

</script>


</body>

</html>
