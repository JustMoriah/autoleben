@extends('layouts.app')

@section('title','Autoleben | Create User')

@section('title')
User #{{$user->id}}
@endsection

@section('content')
@include('sweetalert::alert')
<center>
    <br>
    <h1><strong>User Information</strong></h1><br>
    <ul>
        <li><strong>Id: </strong>{{$user->id}}</li><br>
        <li><strong>Username: </strong>{{$user->username}}</li><br>
        <li><strong>E-mail: </strong>{{$user->email}}</li><br>
        <li><strong>Password: </strong>{{$user->password}}</li><br>
        <li><strong>Name: </strong>{{$user->name}}</li><br>
        <li><strong>Last Name: </strong>{{$user->surname}}</li><br>
        <li><strong>Birthdate: </strong>{{$user->birthdate}}</li><br>
        <li><strong>Phone No.: </strong>{{$user->telephone}}</li><br>
        <li><strong>License No.: </strong>{{$user->license_number}}</li><br>
    </ul>
    <a href="/user">Return to index</a>
</center>
@endsection
