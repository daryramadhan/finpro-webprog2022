@include('template.navbar')

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
        {{-- container --}}
        <p class="m-2"><a href="/home">Back</a></p>
        <div class="card col-12">
            <div class="row justify-content-center col-12">
              <div class="col-md-4">
                <img src="..." alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Azarine Oil Free Brightening Daily Mousturizer</h5>
                  <div class="row">
                    <div class="col-sm-2">Detail</div>
                    <div class="col-sm-10">
                        <p>Moisturizing Cream Gel for Oily skin & Acne Prone Skin Moisturizer morning and night, practical, light and quickly permeates the skin formulated for oily, combination and acne-prone skin. With oil control technology that is able to HOLD OIL for severa hours INSTANTly & gives a MATTE effect on the skin.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">Price</div>
                    <div class="col-sm-10">
                        <p>IDR 24.000</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputQty" class="col-sm-2 col-form-label">Input Qty</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputQty">
                    </div>
                  </div>
                  <p class="card-text"><small class="text-muted">Please re-check your items!</small></p>
                  <button type="submit" class="btn btn-primary">Purchase</button>
                </div>
              </div>
            </div>
          </div>

    </div>

    {{-- product details --}}

    {{-- Beauty Content --}}
    <div class="container">
        <div class="row justify-content-center my-2">
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
