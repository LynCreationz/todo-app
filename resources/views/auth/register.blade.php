@extends('layouts.app')
@section('title', 'Register')
@section('content')
<section class="card"><h1>Create an account</h1><form method="POST" action="{{ route('register') }}">@csrf<label for="name">Name</label><input id="name" name="name" value="{{ old('name') }}" maxlength="255" required autofocus autocomplete="name"><label for="email">Email</label><input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"><label for="password">Password</label><input id="password" type="password" name="password" required minlength="8" autocomplete="new-password"><label for="password_confirmation">Confirm password</label><input id="password_confirmation" type="password" name="password_confirmation" required minlength="8" autocomplete="new-password"><p><button type="submit">Register</button></p></form><p class="muted">Already registered? <a class="link" href="{{ route('login') }}">Log in</a></p></section>
@endsection
