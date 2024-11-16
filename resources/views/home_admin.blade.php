@extends('layouts.app')

@section('title','Autoleben | Admin Mode')

@section('content')
<center>
    <h1>Welcome admin!</h1>
    <img src="{{asset('img/Car.png')}}" alt="Red Car" height="300" width="600">
    <p>Select any CRUD to observe and/or edit it.</p>
    <button class="btn btn-primary"><a href="/user" style="color: white; text-decoration:none">Users</a></button>
    <button class="btn btn-primary"><a href="/user_address" style="color: white; text-decoration:none">User Addresses</a></button>
    <button class="btn btn-primary"><a href="/car_sell" style="color: white; text-decoration:none">Cars for Sale</a></button>
    <button class="btn btn-primary"><a href="/car_rent" style="color: white; text-decoration:none">Cars for Rent</a></button>
</center>
@endsection
