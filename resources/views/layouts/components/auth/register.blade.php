@extends('app')
@section('content')
<div class="container">
      <div class="wrapper">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <div class="title"><span>Register Form</span></div>
        <form method="POST" action="{{ route('register.action') }}">
            @csrf
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" type="username" name="username" class="@error('username')
                @enderror" value="{{ old('username') }}" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" type="password" name="password" required>
            </div>
            <div class="row button">
                <input type="submit" value="Register">
            </div>
          <div class="signup-link">Have an account? <a href="{{ route('login.action') }}">Sign In now</a></div>
        </form>
    </div>
</div>
<script>
@if(Session::has('success'))
toastr.options =
{
    "closeButton":true,
    "progressBar":true
}
toastr.success("{{ session('success') }}")
@endif
</script>
@endsection