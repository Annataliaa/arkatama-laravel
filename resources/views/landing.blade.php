<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Landing Page</title>
</head>
<body>
    <section id="navbar">
            <nav class="navbar navbar-expand-lg bg-dark ">
                <div class="container">
                  <a style="font-family:cooper black" class="navbar-brand text-white" href="#">Cupcake & Cake 🧁</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#content">Products</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link text-white " href="#footer">About</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search" action="/login">  
                        <button class="btn btn-outline-primary" type="submit">Login</button>
                    </form>
                  </div>
                </div>
            </div>
        </nav>
    </section>
    <section id="carousel">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  @foreach ($sliders as $key => $slider)
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}" class="@if ($key == 0) active @endif"></button>
                @endforeach     </div>
                <div class="carousel-inner">
                  @foreach ($sliders as $key => $slider)
                  <div class="carousel-item @if ($key == 0) active @endif">
                    <img src="{{ asset('storage/' . $slider->gambar) }}" class="w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>{{ $slider->caption }}</h5>
                      <p>{{ $slider->deskripsi }}</p>
                    </div>
                   
                  </div>
                  @endforeach
                </div>
              
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
    </section>
    <section id="content">
        <div class="container pt-5 pb-5">
            <h2 class="mb-3 fw-bold">
                Products
            </h2>
            <div class="row g-4">
              @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('storage/' . $product->gambar) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $product->nama }}</h5>
                          <p class="card-text">{{ $product->harga }}</p>
                          <p class="card-text">{{ $product->deskripsi }}</p>
                          <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
    <section id="footer">
        <!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Annatalia (cupcake&cake)</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    </section>
</body>
</html>