@extends('layouts.main')


@section('content')

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>123 Street, Casablanca, Maroc/span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>fergaoui.ayman@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>+212 645 742 931</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="/" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Shop</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/shop" class="nav-item nav-link">Products</a>


                <a href="contact.html" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Cart <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <main>
        <div class="single-p small-container">
          <div class="row-single_product">
            <div class="col-2">
              <!-- رازش تو width100%-->
              <img
                id="big-img"
                src="{{asset("img/kitten-sweater.webp")}}"
                width="100%"
              />

              <div class="pics-row">
                <div class="pics-col-4" id="little-img">
                  <img
                    class="little-img"
                    src="{{asset("img/kitten-sweater_2.webp")}}"
                    width="100%"
                  />
                </div>
                <div class="pics-col-4">
                  <img
                    class="little-img"
                    src="{{asset("img/kitten-sweater_2.webp")}}"
                    width="100%"
                  />
                </div>
                <div class="pics-col-4">
                  <img
                    class="little-img"
                    src="{{asset("img/kitten-sweater_2.webp")}}"
                    width="100%"
                  />
                </div>
                <div class="pics-col-4">
                  <img
                    class="little-img"
                    src="{{asset("img/kitten-sweater_2.webp")}}"
                    width="100%"
                  />
                </div>
              </div>
            </div>
            <div class="col-2">
              <p>Home/T-shirt</p>
              <h1>Red Printed T-shirt by HRX</h1>
              <p>$50.00</p>
              <select style="display: none" name="" id="">
                <option value="1">Select Size</option>
                <option value="2">XXL</option>
                <option value="3">XL</option>
                <option value="4">Medium</option>
                <option value="5">Small</option>
              </select>
              <input type="number" />
              <a href="#" class="btn-cart">Add To Cart</a> <br />
              <h4>Product's Details</h4>
              <i class="fa fa-indent" aria-hidden="true"></i>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore
                adipisci fugit repellat iure laborum error sint aliquam voluptas
                voluptatem placeat voluptatum quaerat doloribus ipsam quae
                inventore velit accusamus soluta suscipit repudiandae, nisi
                aperiam ipsum harum reiciendis? Delectus deleniti optio rerum?
              </p>
            </div>
          </div>

          <div class="title-box">
            <h4>Related Products</h4>
            <p>View More</p>
          </div>
          <div class="row-single_product">
            <div class="col-4 col col-main">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/14-08-08_Taubertal_Trampled_By_Turtles_Tim_Saxhaug.JPG/1200px-14-08-08_Taubertal_Trampled_By_Turtles_Tim_Saxhaug.JPG"
                alt=""
              />
              <div class="text">
                <h3>Red Printed Tshirt</h3>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$50.00</p>
              </div>
            </div>
            <div class="col-4 col col-main">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/14-08-08_Taubertal_Trampled_By_Turtles_Tim_Saxhaug.JPG/1200px-14-08-08_Taubertal_Trampled_By_Turtles_Tim_Saxhaug.JPG"
                alt=""
              />
              <div class="text">
                <h3>Red Printed Tshirt</h3>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$50.00</p>
              </div>
            </div>
            <div class="col-4 col col-main">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/14-08-08_Taubertal_Trampled_By_Turtles_Tim_Saxhaug.JPG/1200px-14-08-08_Taubertal_Trampled_By_Turtles_Tim_Saxhaug.JPG"
                alt=""
              />
              <div class="text">
                <h3>Red Printed Tshirt</h3>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$50.00</p>
              </div>
            </div>
            <div class="col-4 col col-main">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/14-08-08_Taubertal_Trampled_By_Turtles_Tim_Saxhaug.JPG/1200px-14-08-08_Taubertal_Trampled_By_Turtles_Tim_Saxhaug.JPG"
                alt=""
              />
              <div class="text">
                <h3>Red Printed Tshirt</h3>
                <div class="ratings">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$50.00</p>
              </div>
            </div>
          </div>
        </div>
      </main>

      <script src="js/single_products.js"></script>
@endsection
