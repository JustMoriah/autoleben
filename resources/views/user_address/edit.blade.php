@extends('layouts.app')

@section('title','Autoleben | Edit Address')

@section('content')
<center>
    <br>
    <h1><strong>Edit Address</strong></h1><br>
    <form action="/user_address/{{$user_address->id}}" method="post">
        @csrf
        @method('PUT')
        <label>
            Country:
            <input type="text" name="country" value="{{$user_address->country}}">
        </label>
        <br><br>
        <label>
            State:
            <input type="text" name="state" value="{{$user_address->state}}">
        </label>
        <br><br>
        <label>
            City:
            <input type="text" name="city" value="{{$user_address->city}}">
        </label>
        <br><br>
        <label>
            Street:
            <input type="text" name="street" value="{{$user_address->street}}">
        </label>
        <br><br>
        <label>
            Interior Number:
            <input type="number" name="int_num" value="{{$user_address->int_num}}">
        </label>
        <br><br>
        <label>
            Exterior Number:
            <input type="number" name="ext_num" value="{{$user_address->ext_num}}">
        </label>
        <br><br>
        <label>
            Zip Code:
            <input type="number" name="zip_code" value="{{$user_address->zip_code}}">
        </label>
        <br><br>
        <label>
            User ID:
            <input type="number" name="id_user_1" value="{{$user_address->id_user_1}}">
        </label>
        <br><br>
        <button type="submit" class="btn btn-info">
            Edit
        </button><br><br>
        <button class="btn btn-secondary"><a href="/user_address" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@endsection
