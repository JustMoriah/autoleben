@extends('layouts.app')

@section('title','Autoleben | Create User')

@section('title')
Rental Car #{{$car_rent->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<center>
    <br><br><br>
    <h1><strong>Rental Car Information</strong></h1><br>
    <ul>
        <li><strong>Id: </strong>{{$car_rent->id}}</li><br>
        <li><strong>License Plate:</strong>{{$car_rent->license_plate}}</li><br>
        <li><strong>Brand: </strong>{{$car_rent->brand}}</li><br>
        <li><strong>Model: </strong>{{$car_rent->model}}</li><br>
        <li><strong>Color: </strong>{{$car_rent->birthdate}}</li><br>
        <li><strong>Status: </strong>{{$car_rent->status}}</li><br>
        <li><strong>Price: </strong>${{$car_rent->price}}</li><br>
        <li><strong>User ID: </strong>{{$car_rent->id_user_1}}</li>
    </ul>
    <a href="/car_rent">Return to index</a>
</center>
@endsection
