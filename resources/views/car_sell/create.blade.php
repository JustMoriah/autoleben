@extends('layouts.app')

@section('title','Autoleben | Create Car')

@section('content')
<center>
    <br><br>
    <h1><strong>Create a Car Listing</strong></h1><br>
    <form action="/car_sell" method="post">
        @csrf
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
            Stock:
            <input type="number" name="stock" required>
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
        <button class="btn btn-secondary"><a href="/car_sell" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@endsection
