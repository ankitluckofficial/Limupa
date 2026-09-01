@extends("leyout.main")

@section('content')
<div class="register-box">
    <h2>Register</h2>
    <form method="POST" action="">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn-submit">Register</button>
    </form>
</div>
@endsection
