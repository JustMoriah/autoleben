@extends('layouts.app')

@section('title','Autoleben | Edit Rental Car')

@section('content')
<center>
    <br><br>
    <h1><strong>Edit Rental Car Listing</strong></h1><br>
    <form action="/car_rent/{{$car_rent->id}}" method="post">
        @csrf
        @method('PUT')
        <label>
            License Plate:
            <input type="text" name="license_plate" value="{{$car_rent->license_plate}}" required>
        </label>
        <br><br>
        <label>
            Brand:
            <input type="text" name="brand" value="{{$car_rent->brand}}" required>
        </label>
        <br><br>
        <label>
            Model:
            <input type="text" name="model" value="{{$car_rent->model}}" required>
        </label>
        <br><br>
        <label>
            Color:
            <input type="text" name="color" value="{{$car_rent->color}}" required>
        </label>
        <br><br>
        <label>
            Status:
            <input type="text" name="status" value="{{$car_rent->status}}" required>
        </label>
        <br><br>
        <label>
            Price:
            <input type="decimal" name="price" value="{{$car_rent->price}}" required>
        </label>
        <br><br>
        <label>
            User ID:
            <input type="number" name="price" value="{{$car_rent->id_user_1}}" required>
        </label>
        <br><br>
        <button type="submit" class="btn btn-info">
            Edit
        </button><br><br>
        <button class="btn btn-secondary"><a href="/car_rent" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@endsection
