<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    @yield('css')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="crud">
        <table style="width:100%; background-image: linear-gradient(to right, darkblue, teal);;box-shadow: 0px 3px rgba(0,0,0,0.5)">
            <tr>
                <td><h1 style="color:white"><strong>&nbsp;<a href="/home_admin" style="color: white; text-decoration:none">Autoleben</a></strong></h1></td>
                <td style="width:80%">&nbsp;</td>
                <td><button class="btn btn-primary"><a href="/logout" style="color: white; text-decoration:none">Log Out</a></button></td>
            </tr>
        </table>

    </div>
    @include('sweetalert::alert')

</body>
@yield('content')
</html>
