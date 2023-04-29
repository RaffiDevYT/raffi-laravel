@extends('app')
@section('content')
<div class="container">
      <div class="wrapper">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        <div class="title"><span>Login Form</span></div>
        <form method="POST" action="{{ route('login.action') }}">
            @csrf
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email" type="email" name="email" class="@error('error') is-invalid 
                 @enderror" value="{{ old('email') }}" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" type="password" name="password" required>
            </div>
            <div class="pass"><a href="#">Forgot password?</a></div>
            <div class="row button">
                <input type="submit" value="Login">
            </div>
          <div class="signup-link">Not a account? <a href="{{ route('register.action') }}">Signup now</a></div>
        </form>
    </div>
</div>
<script>
@if(Session::has('loginError'))
toastr.options =
{
    "closeButton":true,
    "progressBar":true
}
toastr.error("{{ session('loginError') }}")
@endif
</script>
@endsection

<!-- <a class="btn btn-danger" href="#">Back</a> -->
