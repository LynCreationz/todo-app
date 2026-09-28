@extends('layouts.app')
@section('title', 'Log in')
@section('content')
<section class="card"><h1>Log in</h1><form method="POST" action="{{ route('login') }}">@csrf<label for="email">Email</label><input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"><label for="password">Password</label><input id="password" type="password" name="password" required autocomplete="current-password"><p><label><input type="checkbox" name="remember" value="1" style="width:auto"> Remember me</label></p><button type="submit">Log in</button></form><p class="muted">Need an account? <a class="link" href="{{ route('register') }}">Register</a></p></section>
@endsection
