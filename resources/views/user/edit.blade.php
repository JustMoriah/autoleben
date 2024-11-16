@extends('layouts.app')

@section('title','Autoleben | Edit User')

@section('content')
<center>
    <br>
    <h1><strong>Edit User</strong></h1><br>
    <form action="/user/{{$user->id}}" method="post">
        @csrf
        @method('PUT')
        <label>
            Username:
            <input type="text" name="username" value="{{$user->username}}">
        </label>
        <br><br>
        <label>
            E-mail:
            <input type="email" name="email" value="{{$user->email}}">
        </label>
        <br><br>
        <label>
            Password:
            <input type="password" name="password" value="{{$user->password}}">
        </label>
        <br><br>
        <label>
            Name:
            <input type="text" name="name" value="{{$user->name}}">
        </label>
        <br><br>
        <label>
            Last Name:
            <input type="text" name="surname" value="{{$user->surname}}">
        </label>
        <br><br>
        <label>
            Birthdate:
            <input type="date" name="birthdate" value="{{$user->birthdate}}">
        </label>
        <br><br>
        <label>
            Phone No.:
            <input type="number" name="telephone" value="{{$user->telephone}}">
        </label>
        <br><br>
        <label>
            License No.:
            <input type="number" name="license_number" value="{{$user->license_number}}">
        </label>
        <br><br>
        <button type="submit" class="btn btn-info">
            Edit
        </button><br><br>
        <button class="btn btn-secondary"><a href="/user" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@endsection
