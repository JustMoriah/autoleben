@extends('layouts.app')

@section('title','Autoleben | Create Car')

@section('content')
<center>
    <br><br>
    <h1><strong>Create a Car for Sale</strong></h1><br>
    <form action="/car_sell" method="post">
        @csrf
        <label>
            Brand:
            <input type="text" name="brand">
        </label>
        <br><br>
        <label>
            Model:
            <input type="text" name="model">
        </label>
        <br><br>
        <label>
            Color:
            <input type="text" name="color">
        </label>
        <br><br>
        <label>
            Stock:
            <input type="number" name="stock">
        </label>
        <br><br>
        <label>
            Price:
            <input type="decimal" name="price">
        </label>
        <br><br>
        <button type="submit" class="btn btn-primary">
            Create Car
        </button><br><br>
        <button class="btn btn-info"><a href="/car_sell" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@endsection
