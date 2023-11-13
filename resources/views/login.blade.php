@extends('layout')
@section('title', 'Login')
@section('content')
         
<div class="container d-flex justify-content-center flex-column w-50">
    <h2 class="text-center"><b>WPP</b><br>Web Project Pribadi</h3>

        @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
        </div>
        @elseif(session('success'))
        <div class="alert alert-success">
            <b>Yippie!</b> {{session('success')}}
        </div>
        @endif
        <form action="{{ route('login.action') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
            <hr>
            <p class="text-center">Belum punya akun? <a href="#">Register</a> sekarang!</p>
        </form>
</div>
@endsection
