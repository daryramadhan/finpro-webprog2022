@include('template.navbar-admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barbaros Shop</title>
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/f8eea84980.js"></script>
</head>
<body class="bg-dark">

    {{-- Beauty Content --}}
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="card col-6 p-0">
                <div class="card-header text-center">
                  Profile
                </div>
                <div class="card-body">
                    {{-- form --}}
                    <form>
                        {{-- name --}}
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Name</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Camille Marvin" disabled>
                        </div>
                        {{-- email --}}
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Email</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="camillemarvin@gmail.com" disabled>
                        </div>
                        {{-- gender --}}
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Gender</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Woman" disabled>
                        </div>
                        {{-- Date of Birth --}}
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Date of Birth</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="18-01-1980" disabled>
                        </div>
                        {{-- Country --}}
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Country</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Laos" disabled>
                        </div>
                      </form>
                </div>
              </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
