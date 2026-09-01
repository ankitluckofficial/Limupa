@extends('leyout.main')

@section('content')
<div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
        <!-- Forgot Password -->
        <div class="mt-3">
            <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
    </form>
</div>
@endsection
