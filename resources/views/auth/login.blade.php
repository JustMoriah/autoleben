@extends('layouts.app')

@section('title','Autoleben | Login')

@section('content')
<div>
    <h2>Log In</h2>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <br>
    <p>Don't have an account? <a href="/register">Create an account by clicking here.</a></p>
</div>
@endsection
