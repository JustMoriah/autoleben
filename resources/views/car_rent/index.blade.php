@extends('layouts.app')

@section('title','Autoleben | Rent-a-Car')

@section('content')
@include('sweetalert::alert')
    <h1>Rent-a-Car</h1>

    <a href="/car_rent/create" class="btn btn-primary">New Rental Car</a>
    <br>
    <table class="table table-striped">
        <tr>
        <th>ID</th>
        <th>License Plate</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Color</th>
        <th>Status</th>
        <th>Price</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>

        @foreach ($car_rents as $car_rent)

            <tr>
                <td>
                    <h3>{{$car_rent->id}}</h3>
                    </td>
                <td>
                <h3>{{$car_rent->license_plate}}</h3>
                </td>
                <td>
                    <h3>{{$car_rent->brand}}</h3>
                </td>
                <td>
                    <h3>{{$car_rent->model}}</h3>
                </td>
                <td>
                    <h3>{{$car_rent->color}}</h3>
                </td>
                <td>
                    <h3>{{$car_rent->status}}</h3>
                </td>
                <td>
                    <h3>{{$car_rent->price}}</h3>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/car_rent/{{$car_rent->id}}" style="color: white; text-decoration:none">Show</a></button>
                </td>
                <td>
                    <button class="btn btn-primary"><a href="/car_rent/{{$car_rent->id}}/edit" style="color: white; text-decoration:none">Edit</a></button>
                </td>
                <td>
                    <form action="/car_rent/{{$car_rent->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-primary">
                                Delete Rental Car
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

{{$car_rents->links()}}
@endsection