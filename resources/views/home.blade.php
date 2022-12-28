@extends('layouts.app')

@section('content')
  <!-- Carousel -->

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-4 order-lg-last">
                        <img src="{{ asset('asset/image/food1.jpg') }}" class="img-fluid">
                    </div>
                    <div class="col-lg-6 mb-0">
                        <h1>Salad</h1>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquam quisquam
                            temporibus beatae necessitatibus voluptatum at quo recusandae placeat inventore commodi
                            pariatur explicabo ipsam tenetur praesentium nisi, mollitia cum. Labore voluptates qui
                            consequatur possimus laudantium magnam nihil eligendi ducimus libero ullam,
                            necessitatibus, est sit sapiente assumenda, deleniti in nam! Nobis?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-4 order-lg-last">
                        <img src="{{asset('asset/image/food2.jpg') }}" width="300" height="300">
                    </div>
                    <div class="col-lg-6 mb-0">
                        <h1>Pizza</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At nobis ipsum consequuntur
                            iste? Laudantium nostrum quaerat nihil tempora error blanditiis repudiandae amet
                            corporis accusantium, cupiditate nemo veritatis consequatur perspiciatis perferendis
                            sint ipsa maxime repellat? Aspernatur iure fugiat eaque libero alias?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-4 order-lg-last">
                        <img src="{{ asset('asset/image/food3.jpg') }}" width="300" height="300">
                    </div>
                    <div class="col-lg-6 mb-0">
                        <h1>Carbonara</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic reiciendis, exercitationem
                            quis omnis fuga excepturi alias eum ipsam, architecto perferendis pariatur! Velit illum
                            eligendi soluta officiis nihil possimus repellat officia voluptas, nesciunt cum placeat
                            tenetur blanditiis itaque exercitationem! Doloremque laudantium ad obcaecati, assumenda
                            quam praesentium?</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- End Carousel -->


<!-- content 1 -->
<section class="container py-5 text-light">
  <div class="row text-center pt-3">
    <div class="col-lg-6 m-auto">
      <h1 class="h1">Categories of The Month</h1>
      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-4 p-5 mt-3">
      <a href="#"><img src="{{ asset('asset/image/food1.jpg') }}" class="img-fluid border" /></a>
      <h5 class="text-center mt-3 mb-3">Salad</h5>
      <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
    </div>
    <div class="col-12 col-md-4 p-5 mt-3">
      <a href="#"><img src="{{ asset('asset/image/food2.jpg') }}" class="img-fluid border" style="width: 300px; height: 340px;"/></a>
      <h2 class="h5 text-center mt-3 mb-3">Pizza</h2>
      <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
    </div>
    <div class="col-12 col-md-4 p-5 mt-3">
      <a href="#"><img src="{{ asset('asset/image/food3.jpg') }}" class="img-fluid border" style="width: 300px; height:340px;" /></a>
      <h2 class="h5 text-center mt-3 mb-3">Carbonara</h2>
      <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
    </div>
  </div>
</section>
<!-- end content 1 -->


<!-- content 2 -->
<section>
  <div class="container py-5">
    <div class="row text-center py-3">
      <div class="col-lg-6 m-auto text-light">
        <h1 class="h1">Featured Product</h1>
        <p>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100">
          <a href="shop.html">
            <img src="{{ asset('asset/image/cake.jpg') }}" class="img-fluid" alt="Cake" />
          </a>
          <div class="card-body">
            <ul class="list-unstyled d-flex justify-content-between">
              <li class="text-muted text-right">Rp. 40.000</li>
            </ul>
            <a href="shop.html" class="h2 text-decoration-none text-dark">Cake</a>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.</p>
            <p class="text-muted">Reviews (24)</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100">
          <a href="shop.html">
            <img src="{{ asset('asset/image/ice.jpg') }}" class="img-fluid" alt="Ice Cream" />
          </a>
          <div class="card-body">
            <ul class="list-unstyled d-flex justify-content-between">
              <li class="text-muted text-right">Rp. 30.000</li>
            </ul>
            <a href="shop.html" class="h2 text-decoration-none text-dark">Ice Cream</a>
            <p class="card-text">Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.</p>
            <p class="text-muted">Reviews (48)</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100">
          <a href="shop.html">
            <img src="{{ asset('asset/image/steak.jpg') }}" class="img-fluid" alt="Steak" />
          </a>
          <div class="card-body">
            <ul class="list-unstyled d-flex justify-content-between">
              <li class="text-muted text-right">Rp. 50.000</li>
            </ul>
            <a href="shop.html" class="h2 text-decoration-none text-dark">Steak</a>
            <p class="card-text">Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.</p>
            <p class="text-muted">Reviews (74)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end content 2 -->

   <!-- Start Footer -->
   <footer class="bg-dark" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 pt-5">
          <h2 class="h2 text-success border-bottom pb-3 border-light logo">Food And Shealty</h2>
          <ul class="list-unstyled text-light footer-link-list">
            <li>
              <i class="fa fa-map-marker"></i>
              <a class="text-decoration-none" href="Jl. Menuju Kemenangan No.99" style="margin-left: 15px;">Jl. Menuju Kemenangan No.99 </a>

            </li>
            <li>
              <i class="fa fa-phone fa-fw"></i>
              <a class="text-decoration-none" href="tel:010-020-0340">(021) 326 917</a>
            </li>
            <li>
              <i class="fa fa-envelope fa-fw"></i>
              <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
            </li>
          </ul>
        </div>

        <div class="col-md-4 pt-5">
          <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
          <ul class="list-unstyled text-light footer-link-list">
            <li><a class="text-decoration-none" href="#">Home</a></li>
            <li><a class="text-decoration-none" href="#">About Us</a></li>
            <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
            <li><a class="text-decoration-none" href="#">FAQs</a></li>
            <li><a class="text-decoration-none" href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="w-100 bg-black py-3">
      <div class="container">
        <div class="row pt-2">
          <div class="col-12">
            <p class="text-left text-light">Copyright &copy; 2022 Dream</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

@endsection
