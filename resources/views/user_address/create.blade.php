@extends('layouts.app')

@section('title','Autoleben | Create User')

@section('content')
<center>
    <br>
    <h1><strong>Add User Address</strong></h1><br>
    <form action="/user_address" method="post" id="user_address_form">
        @csrf
        <label>
            Country:
            <input type="text" name="country" id="country" required>
        </label>
        <br><br>
        <label>
            State:
            <input type="text" name="state" id="state" required>
        </label>
        <br><br>
        <label>
            City:
            <input type="text" name="city" id="city" required>
        </label>
        <br><br>
        <label>
            Street:
            <input type="text" name="street" id="street" required>
        </label>
        <br><br>
        <label>
            Internal Number:
            <input type="number" name="int_num" id="int_num" required>
        </label>
        <br><br>
        <label>
            External Number:
            <input type="number" name="ext_num" id="ext_num" required>
        </label>
        <br><br>
        <label>
            Zip Code:
            <input type="number" name="zip_code" id="zip_code" required>
        </label>
        <br><br>
        <label>
            User ID:
            <input type="number" name="id_user_1" id="id_user_1" required>
        </label>
        <br><br>
        <button type="submit" class="btn btn-success">
            Add
        </button><br><br>
        <button class="btn btn-secondary"><a href="/user_address" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@section('script')
<script>
    $(document).ready(function() {
        $('#user_address_form').on('submit', function(event) {
            event.preventDefault();
            if ($('#country').val() === '') {
                Swal.fire("Error!", "Please enter a country.", "error");
                return;
            }
            else if ($('#state').val() === '') {
                Swal.fire("Error!", "Please enter a state.", "error");
                return;
            }
            else if ($('#city').val() === '') {
                Swal.fire("Error!", "Please enter a city.", "error");
                return;
            }
            else if ($('#street').val() === '') {
                Swal.fire("Error!", "Please enter a street.", "error");
                return;
            }
            else if ($('#int_num').val() === '') {
                Swal.fire("Error!", "Please enter an internal number.", "error");
                return;
            }
            else if ($('#ext_num').val() === '') {
                Swal.fire("Error!", "Please enter an external number.", "error");
                return;
            }
            else if ($('#zip_code').val() === '') {
                Swal.fire("Error!", "Please enter a zip code.", "error");
                return;
            }
            else if ($('#id_user_1').val() === '') {
                Swal.fire("Error!", "Please enter a user ID.", "error");
                return;
            }
            var formData = $(this).serialize();
            var url = $(this).attr('action') || '/ruta/por/defecto';
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                success: function(response) {
                    Swal.fire("Success!", "Address has been added successfully!", "success").then(() => {
                        $('#user_address_form')[0].reset();
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
