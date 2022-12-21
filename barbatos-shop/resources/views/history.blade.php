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

    <div class="container">
        <div class="row">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle col-8" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>

        </div>

    </div>

    {{-- Content --}}
    <div class="container my-2">
        <div class="row justify-content-center my-4">
            <div class="card col-8 p-0">
                <div class="card-body">
                    <div class="row justify-content-center col-12">
                        <div class="col-md-4">
                          <img src="..." alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body p-0 my-2">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col col-8">
                                        <div class="card-title">
                                            <h5>Azarine Oil Free Brightening Daily Mousturizer</h5>
                                        </div>
                                        <div class="card-text">
                                            <p>Quantity : 11</p>
                                            <p>Total Price : Rp15.000</p>
                                        </div>
                                    </div>
                                    <div class="justify-content-end">
                                        <button class="btn btn-warning" type="button">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="container d-flex">
        <nav class="navbar fixed-bottom navbar-light bg-light justify-content-center">
            <p class="m-0">Total Price: IDR 3812900</p>
            <button class="btn btn-primary mx-4" type="button">
                Purchase
            </button>
          </nav>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
