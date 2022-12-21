@include('template.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/f8eea84980.js"></script>
</head>
<body class="bg-dark my-auto">

    {{-- login form --}}
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="card col-6 p-0">
                <div class="card-header text-center">
                  Register
                </div>
                <div class="card-body">
                    <form>
                        {{-- Name --}}
                        <div class="form-group">
                          <label for="exampleInputName1">Name</label>
                          <input type="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter your name">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        {{-- Email --}}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        {{-- Password --}}
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                        </div>
                        {{-- Confirm Password --}}
                        <div class="form-group">
                          <label for="exampleInputPassword1">Confirm Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-type your password">
                        </div>
                        {{-- Gender --}}
                        <div class="form-group form-check">
                          <input type="radio" class="form-gender-input" id="men" value="Men">
                          <label for="men">Men</label><br>
                          <input type="radio" class="form-gender-input" id="women" value="Women">
                          <label for="women">Women</label><br>
                        </div>
                        {{-- Date of birth --}}
                        <div class="form-group">
                            <label for="exampleInputDOB1">Date of Birth</label>
                              <input type="text" class="form-control" placeholder="Date of Birth">
                            <label for="exampleInputCountry1">Country</label>
                              <input type="text" class="form-control" placeholder="Country">
                        </div>
                        {{-- Register Button --}}
                        <button type="submit" class="btn btn-primary justify-content-center my-3">Register</button>
                      </form>
                  <p>Have an account? <a href="login">Login Here</a></p>
                </div>
              </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
