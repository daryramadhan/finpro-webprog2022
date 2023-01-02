@include('template.navbar')

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barbaros Shop</title>
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/f8eea84980.js"></script>
</head> --}}
<body class="bg-dark">
        <!-- Another variation with a button -->
    <div class="container">
        <div class="row justify-text-center my-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search this blog">
                <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Beauty Content --}}
    @foreach ($category as $cat)
        
    <div class="container">
      <div class="row justify-content-center my-2">
        <div class="card col-12 p-0">
          <div class="card-header">
            {{ $cat->name }} <a href="beauty-all">View All</a>
          </div>
          @foreach ($cat->Product as $item)
              
          <div class="card-body">
            <div class="card-deck">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->product_name }}</h5>
                  <h4 class="card-price">{{ $item->product_price }}</h4>
                  {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="detail-product">Detail</a>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                </div>
              </div>
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @endforeach
    {{-- Camera Content --}}
    <div class="container">
      <div class="row justify-content-center my-4">
        <div class="card col-12 p-0">
          <div class="card-header">
            Camera <a href="#">View All</a>
          </div>
          <div class="card-body">
            <div class="card-deck">
              <div class="card" onclick="location.href='detail-product';">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
{{-- </html> --}}
