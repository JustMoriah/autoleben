@extends('layouts.app')

@section('title','Autoleben | Users')

@section('content')
@include('sweetalert::alert')
    <h1>Users</h1>

    <a href="/user/create" class="btn btn-primary">New User</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>Username</th>
        <th>E-mail</th>
        <th>Password</th>
        <th>Name</th>
        <th>Last Name</th>
        <th>Birthdate</th>
        <th>Phone No.</th>
        <th>License No.</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>

        @foreach ($users as $user)

            <tr>
                <td>
                    <h3>{{$user->id}}</h3>
                </td>
                <td>
                    <h3>{{$user->username}}</h3>
                </td>
                <td>
                    <h3>{{$user->email}}</h3>
                </td>
                <td>
                    <h3>{{$user->password}}</h3>
                </td>
                <td>
                    <h3>{{$user->name}}</h3>
                </td>
                <td>
                    <h3>{{$user->surname}}</h3>
                </td>
                <td>
                    <h3>{{$user->birthdate}}</h3>
                </td>
                <td>
                    <h3>{{$user->telephone}}</h3>
                </td>
                <td>
                    <h3>{{$user->license_number}}</h3>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/user/{{$user->id}}" style="color: white; text-decoration:none">Show</a></button>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/user/{{$user->id}}/edit" style="color: white; text-decoration:none">Edit</a></button>
                </td>
                <td>
                    <form action="/user/{{$user->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-primary">
                                Delete User
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

{{$users->links()}}
@endsection
