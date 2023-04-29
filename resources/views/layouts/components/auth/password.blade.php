@extends('app')
@section('content')
<div class="container">
      <div class="wrapper">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <div class="title"><span>Change Password</span></div>
        <form method="POST" action="{{ route('password_action') }}">
            @csrf
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="password" placeholder="Old Password" type="password" name="old_password" required>
            </div>
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="password" placeholder="New Password" type="password" name="new_password" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirmation Password" type="password" name="new_password_confirmation" required>
            </div>
            <div class="row button">
                <input type="submit" value="Change">
            </div>
        </form>
    </div>
</div>
@endsection