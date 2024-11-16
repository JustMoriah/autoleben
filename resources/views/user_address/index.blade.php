@extends('layouts.app')

@section('title','Autoleben | User Addresses')

@section('content')
@include('sweetalert::alert')
    <h1>User Addresses</h1>

    <a href="/user_address/create" class="btn btn-primary">New Address</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>Country</th>
        <th>State</th>
        <th>City</th>
        <th>Street</th>
        <th>Interior Number</th>
        <th>Exterior Number</th>
        <th>Zip Code</th>
        <th>User ID</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>

        @foreach ($user_addresss as $user_address)

            <tr>
                <td>
                    <h3>{{$user_address->id}}</h3>
                    </td>
                <td>
                <h3>{{$user_address->country}}</h3>
                </td>
                <td>
                    <h3>{{$user_address->state}}</h3>
                </td>
                <td>
                    <h3>{{$user_address->city}}</h3>
                </td>
                <td>
                    <h3>{{$user_address->street}}</h3>
                </td>
                <td>
                    <h3>{{$user_address->int_num}}</h3>
                </td>
                <td>
                    <h3>{{$user_address->ext_num}}</h3>
                </td>
                <td>
                    <h3>{{$user_address->zip_code}}</h3>
                </td>
                <td>
                    <h3>{{$user_address->id_user_1}}</h3>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/user_address/{{$user_address->id}}" style="color: white; text-decoration:none">Show</a></button>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/user_address/{{$user_address->id}}/edit" style="color: white; text-decoration:none">Edit</a></button>
                </td>
                <td>
                    <form action="/user_address/{{$user_address->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-primary">
                                Delete Address
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

{{$user_addresss->links()}}
@endsection
