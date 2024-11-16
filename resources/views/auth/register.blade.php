@extends('layouts.app')

@section('title','Autoleben | Sign Up')

@section('content')
<div>
    <h2>Sign Up</h2>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <label for="password_confirmation">Confirm Password:</label><br>
        <input type="password" name="password_confirmation" id="password_confirmation" required><br><br>

        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="surname">Last Name:</label><br>
        <input type="text" name="surname" id="surname" required><br><br>

        <label for="birthdate">Birthdate:</label><br>
        <input type="date" name="birthdate" id="birthdate" required><br><br>

        <label for="telephone">Phone No.:</label><br>
        <input type="number" name="telephone" id="telephone" required><br><br>

        <label for="license_number">License No.:</label><br>
        <input type="text" name="license_number" id="license_number" required><br><br>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
    <br>
    <p>Already have an account? <a href="/login">Sign into your account by clicking here.</a></p>
</div>
@endsection
