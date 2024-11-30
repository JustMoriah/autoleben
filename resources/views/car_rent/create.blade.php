@extends('layouts.app')

@section('title','Autoleben | Create Rental Car')

@section('content')
<center>
    <br><br>
    <h1><strong>Create a Rental Car Listing</strong></h1><br>
    <form action="/car_rent" method="post" id="car_rent_form">
        @csrf
        <label>
            License Plate:
            <input type="text" name="license_plate" id="license_plate" required>
        </label>
        <br><br>
        <label>
            Brand:
            <input type="text" name="brand" id="brand" required>
        </label>
        <br><br>
        <label>
            Model:
            <input type="text" name="model" id="model" required>
        </label>
        <br><br>
        <label>
            Color:
            <input type="text" name="color" id="color" required>
        </label>
        <br><br>
        <label>
            Status:
            <input type="text" name="status" id="status" required>
        </label>
        <br><br>
        <label>
            Price:
            <input type="decimal" name="price" id="price" required>
        </label>
        <br><br>
        <label>
            User ID:
            <input type="number" name="id_user_1" id="id_user_1" required>
        </label>
        <br><br>
        <button type="submit" class="btn btn-success">
            Create
        </button><br><br>
        <button class="btn btn-secondary"><a href="/car_rent" style="color: white; text-decoration:none">Cancel</a></button>
    </form>
</center>
@section('script')
<script>
    $(document).ready(function() {
        $('#car_rent_form').on('submit', function(event) {
            event.preventDefault();
            if ($('#license_plate').val() === '') {
                Swal.fire("Error!", "Please enter a license plate number.", "error");
                return;
            }
            else if ($('#brand').val() === '') {
                Swal.fire("Error!", "Please enter a brand.", "error");
                return;
            }
            else if ($('#model').val() === '') {
                Swal.fire("Error!", "Please enter a model.", "error");
                return;
            }
            else if ($('#color').val() === '') {
                Swal.fire("Error!", "Please enter a color.", "error");
                return;
            }
            else if ($('#status').val() === '') {
                Swal.fire("Error!", "Please enter a status.", "error");
                return;
            }
            else if ($('#price').val() === '') {
                Swal.fire("Error!", "Please enter a price.", "error");
                return;
            }
            else if ($('#id_user_1').val() === '') {
                Swal.fire("Error!", "Please enter a user ID, if there is none, enter 0.", "error");
                return;
            }
            var formData = $(this).serialize();
            var url = $(this).attr('action') || '/ruta/por/defecto';
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                success: function(response) {
                    Swal.fire("Success!", "Rental car has been added successfully!", "success").then(() => {
                        $('#car_rent_form')[0].reset();
                    });
                },
                error: function(xhr) {
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            Swal.fire("Error!", value[0], "error");
                        });
                    } else {
                        Swal.fire("Error!", "An unexpected error has occurred!", "error");
                    }
                }
            });
        });
    });
</script>
@endsection
@endsection
