@extends('layouts.app')

@section('title','Autoleben | Edit Car')

@section('content')
<center>
    <br><br>
    <h1><strong>Edit Car Listing</strong></h1><br>
    <form action="/car_sell/{{$car_sell->id}}" method="post">
        @csrf
        @method('PUT')
        <label>
            Brand:
            <input type="text" name="brand" value="{{$car_sell->brand}}">
        </label>
        <br><br>
        <label>
            Model:
            <input type="text" name="model" value="{{$car_sell->model}}">
        </label>
        <br><br>
        <label>
            Color:
            <input type="text" name="color" value="{{$car_sell->color}}">
        </label>
        <br><br>
        <label>
            Stock:
            <input type="number" name="stock" value="{{$car_sell->stock}}">
        </label>
        <br><br>
        <label>
            Price:
            <input type="decimal" name="price" value="{{$car_sell->price}}">
        </label>
        <br><br>
        <button type="submit" class="btn btn-info">
            Edit
        </button><br><br>
        <button class="btn btn-secondary"><a href="/car_sell" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@endsection
