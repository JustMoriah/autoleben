@extends('layouts.app')

@section('title','Autoleben | Create User')

@section('content')
<center>
    <br>
    <h1><strong>Add User Address</strong></h1><br>
    <form action="/user_address" method="post">
        @csrf
        <label>
            Country:
            <input type="text" name="country">
        </label>
        <br><br>
        <label>
            State:
            <input type="text" name="state">
        </label>
        <br><br>
        <label>
            City:
            <input type="text" name="city">
        </label>
        <br><br>
        <label>
            Street:
            <input type="text" name="street">
        </label>
        <br><br>
        <label>
            Internal Number:
            <input type="number" name="int_num">
        </label>
        <br><br>
        <label>
            External Number:
            <input type="number" name="ext_num">
        </label>
        <br><br>
        <label>
            Zip Code:
            <input type="number" name="zip_code">
        </label>
        <br><br>
        <label>
            User ID:
            <input type="number" name="id_user_1">
        </label>
        <br><br>
        <button type="submit" class="btn btn-primary">
            Add Address
        </button><br><br>
        <button class="btn btn-info"><a href="/user_address" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@endsection
