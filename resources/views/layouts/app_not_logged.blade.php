<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @yield('css')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="crud">
        <table style="width:100%; background-image: linear-gradient(to right, darkblue, teal);;box-shadow: 0px 3px rgba(0,0,0,0.5)">
            <tr>
                <td><h1 style="color:white"><strong>&nbsp;Autoleben</strong></h1></td>
                <td style="width:70%">&nbsp;</td>
                <td><button class="btn btn-primary"><a href="/login" style="color: white; text-decoration:none">Login</a></button></td>
                <td><button class="btn btn-primary"><a href="/register" style="color: white; text-decoration:none">Sign Up</a></button></td>
            </tr>
        </table>

    </div>
    @include('sweetalert::alert')
    @yield('content')

</body>
</html>
