@extends('layouts.app')

@section('title','Autoleben | Create Rental Car')

@section('content')
<center>
    <br><br>
    <h1><strong>Create a Rental Car Listing</strong></h1><br>
    <form action="/car_rent" method="post">
        @csrf
        <label>
            License Plate:
            <input type="text" name="license_plate" required>
        </label>
        <br><br>
        <label>
            Brand:
            <input type="text" name="brand" required>
        </label>
        <br><br>
        <label>
            Model:
            <input type="text" name="model" required>
        </label>
        <br><br>
        <label>
            Color:
            <input type="text" name="color" required>
        </label>
        <br><br>
        <label>
            Status:
            <input type="text" name="status" required>
        </label>
        <br><br>
        <label>
            Price:
            <input type="decimal" name="price" required>
        </label>
        <br><br>
        <label>
            User ID:
            <input type="number" name="id_user_1" required>
        </label>
        <br><br>
        <button type="submit" class="btn btn-success">
            Create
        </button><br><br>
        <button class="btn btn-secondary"><a href="/car_rent" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@endsection
