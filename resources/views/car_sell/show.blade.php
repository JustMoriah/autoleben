@extends('layouts.app')

@section('title','Autoleben | Create User')

@section('title')
Car #{{$car_sell->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<center>
    <br><br>
    <h1><strong>Car Information</strong></h1>
    <ul>
        <li><strong>Id: </strong>{{$car_sell->id}}</li>
        <li><strong>Brand: </strong>{{$car_sell->brand}}</li>
        <li><strong>Model: </strong>{{$car_sell->model}}</li>
        <li><strong>Color: </strong>{{$car_sell->birthdate}}</li>
        <li><strong>Stock: </strong>{{$car_sell->stock}}</li>
        <li><strong>Price: </strong>${{$car_sell->price}}</li>
        <li><strong>User ID: </strong>${{$car_sell->id_user_1}}</li>
    </ul>
    <br>
    <a href="/car_sell">Return to index</a>
</center>
@endsection
