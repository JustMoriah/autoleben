@extends('layouts.app')

@section('title','Autoleben | Edit User')

@section('content')
<center>
    <br>
    <h1><strong>Edit User</strong></h1><br>
    <form action="/user/{{$user->id}}" method="post" id="user_form">
        @csrf
        @method('PUT')
        <label>
            Username:
            <input type="text" name="username" id="username" value="{{$user->username}}">
        </label>
        <br><br>
        <label>
            E-mail:
            <input type="email" name="email" id="email" value="{{$user->email}}">
        </label>
        <br><br>
        <label>
            Password:
            <input type="password" name="password" id="password" value="{{$user->password}}">
        </label>
        <br><br>
        <label>
            Name:
            <input type="text" name="name" id="name" value="{{$user->name}}">
        </label>
        <br><br>
        <label>
            Last Name:
            <input type="text" name="surname" id="surname" value="{{$user->surname}}">
        </label>
        <br><br>
        <label>
            Birthdate:
            <input type="date" name="birthdate" id="birthdate" value="{{$user->birthdate}}">
        </label>
        <br><br>
        <label>
            Phone No.:
            <input type="number" name="telephone" id="telephone" value="{{$user->telephone}}">
        </label>
        <br><br>
        <label>
            License No.:
            <input type="number" name="license_number" id="license_number" value="{{$user->license_number}}">
        </label>
        <br><br>
        <button type="submit" class="btn btn-info">
            Edit
        </button><br><br>
        <button class="btn btn-secondary"><a href="/user" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@section('script')
<script>
    $(document).ready(function() {
        $('#user_form').on('submit', function(event) {
            event.preventDefault();
            if ($('#username').val() === '') {
                Swal.fire("Error!", "Please enter a username.", "error");
                return;
            }
            else if ($('#email').val() === '') {
                Swal.fire("Error!", "Please enter an e-mail.", "error");
                return;
            }
            else if ($('#password').val() === '') {
                Swal.fire("Error!", "Please enter a password.", "error");
                return;
            }
            else if ($('#name').val() === '') {
                Swal.fire("Error!", "Please enter a name.", "error");
                return;
            }
            else if ($('#surname').val() === '') {
                Swal.fire("Error!", "Please enter a surname.", "error");
                return;
            }
            else if ($('#birthdate').val() === '') {
                Swal.fire("Error!", "Please enter a birthdate.", "error");
                return;
            }
            else if ($('#telephone').val() === '') {
                Swal.fire("Error!", "Please enter a phone number.", "error");
                return;
            }
            else if ($('#license_number').val() === '') {
                Swal.fire("Error!", "Please enter a driver license number.", "error");
                return;
            }
            var formData = $(this).serialize();
            var url = $(this).attr('action') || '/ruta/por/defecto';
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                success: function(response) {
                    Swal.fire("Success!", "User has been added successfully.", "success").then(() => {
                        $('#user_form')[0].reset();
                    });
                },
                error: function(xhr) {
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            Swal.fire("Error!", value[0], "error");
                        });
                    } else {
                        Swal.fire("Error!", "An unexpected error has occurred.", "error");
                    }
                }
            });
        });
    });
</script>
@endsection
@endsection
