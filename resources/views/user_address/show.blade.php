@extends('layouts.app')

@section('title','Autoleben | Create User')

@section('title')
Address #{{$user_address->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<center>
    <br>
    <h1><strong>Address Information</strong></h1><br>
    <ul>
        <li><strong>Id: </strong>{{$user_address->id}}</li><br>
        <li><strong>Country: </strong>{{$user_address->country}}</li><br>
        <li><strong>State: </strong>{{$user_address->state}}</li><br>
        <li><strong>City: </strong>{{$user_address->city}}</li><br>
        <li><strong>Street: </strong>{{$user_address->street}}</li><br>
        <li><strong>Interior Number: </strong>{{$user_address->int_num}}</li><br>
        <li><strong>Exterior Number: </strong>{{$user_address->ext_num}}</li><br>
        <li><strong>Zip Code: </strong>{{$user_address->zip_code}}</li><br>
        <li><strong>User ID: </strong>{{$user_address->id_user_1}}</li><br>
    </ul>
    <br>
    <a href="/user_address">Return to index</a>
</center>
@endsection
