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
        <!-- Another variation with a button -->
        <div class="container">
            <div class="row my-4 justify-content-start">
                <div class="col-2 p-0">
                    <div class="input-group">
                        <button class="btn btn-secondary" type="button">
                            <i class="fa fa-angle-left mr-2"></i>
                            back
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{-- Beauty Content --}}
    <div class="container">
        <div class="row justify-content-center my-2">
            <div class="card col-12 p-0">
                <div class="card-header">
                  Update product
                </div>
                <div class="card-body">
                    {{-- form --}}
                    <form>
                        {{-- name --}}
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Name</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Write your name here">
                        </div>
                        {{-- category --}}
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Genre</label>
                          <select class="form-control" id="exampleFormControlSelect1" placeholder="Select a category">
                            <option>Beauty</option>
                            <option>Camera</option>
                            <option>Sport</option>
                            <option>Kitchen</option>
                          </select>
                        </div>
                        {{-- detail --}}
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Description</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        {{-- price --}}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Price</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Input price here">
                          </div>
                        {{-- photo --}}
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Photo</label>
                            <input type="file" class="form-control-file border col-form-label" id="exampleFormControlFile1">
                          </div>
                        {{-- button --}}
                          <button type="submit" class="btn btn-primary">Update</button>
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
