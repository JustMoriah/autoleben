@extends('layouts.app')

@section('title','Autoleben | Cars for Sale')

@section('content')
@include('sweetalert::alert')
    <h1><strong>Cars for Sale</strong></h1>

    <a href="/car_sell/create" class="btn btn-success">New Car</a>
    <br>
    <table class="table table-striped" style="width: 100%">
        <tr>
        <th>ID</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Color</th>
        <th>Stock</th>
        <th>Price</th>
        <th>User ID</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>

        @foreach ($car_sells as $car_sell)

            <tr>
                <td>
                    <h3>{{$car_sell->id}}</h3>
                    </td>
                <td>
                    <h3>{{$car_sell->brand}}</h3>
                </td>
                <td>
                    <h3>{{$car_sell->model}}</h3>
                </td>
                <td>
                    <h3>{{$car_sell->color}}</h3>
                </td>
                <td>
                    <h3>{{$car_sell->stock}}</h3>
                </td>
                <td>
                    <h3>{{$car_sell->price}}</h3>
                </td>
                <td>
                    <h3>{{$car_sell->id_user_1}}</h3>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/car_sell/{{$car_sell->id}}" style="color: white; text-decoration:none">Show</a></button>
                </td>
                <td>
                    <button class="btn btn-info"><a href="/car_sell/{{$car_sell->id}}/edit" style="color: white; text-decoration:none">Edit</a></button>
                </td>
                <td>
                    <form action="/car_sell/{{$car_sell->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-danger">
                                Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

{{$car_sells->links()}}
@endsection
