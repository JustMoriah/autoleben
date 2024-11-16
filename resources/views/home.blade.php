@extends('layouts.app_not_logged')

@section('title','Autoleben')

@section('content')
    <center>
        <br><br>
        <h1><strong>Need a car?</strong></h1>
        <img src="{{asset('img/Car.png')}}" alt="Red Car" height="300" width="600">
        <h2>Do you want to buy or rent?</h2>
        <h3>No matter your answer, you've come to the right place!</h3>
        <button class="btn btn-primary"><a href="/car_sell" style="color: white; text-decoration:none">Cars for Sale</a></button>
        <button class="btn btn-primary"><a href="/car_rent" style="color: white; text-decoration:none">Cars for Rent</a></button>
    </center>
    <br><br><br>
    <table>
        <tr>
            <td>&nbsp;&copy;2024 ThatMattie</td>
        </tr>
    </table>
@endsection
