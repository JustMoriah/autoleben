@extends('layouts.app')

@section('title','Autoleben | Create User')

@section('content')
<center>
    <br>
    <h1><strong>Create User</strong></h1><br>
    <form action="/user" method="post">
        @csrf
        <label>
            Username:
            <input type="text" name="username" required>
        </label>
        <br><br>
        <label>
            E-mail:
            <input type="email" name="email" required>
        </label>
        <br><br>
        <label>
            Password:
            <input type="password" name="password" required>
        </label>
        <br><br>
        <label>
            Name:
            <input type="text" name="name" required>
        </label>
        <br><br>
        <label>
            Last Name:
            <input type="text" name="surname" required>
        </label>
        <br><br>
        <label>
            Birthdate:
            <input type="date" name="birthdate" required>
        </label>
        <br><br>
        <label>
            Phone No.:
            <input type="number" name="telephone" required>
        </label>
        <br><br>
        <label>
            License No.:
            <input type="number" name="license_number" required>
        </label>
        <br><br>
        <button type="submit" class="btn btn-primary">
            Create User
        </button><br><br>
        <button class="btn btn-info"><a href="/user" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@endsection
