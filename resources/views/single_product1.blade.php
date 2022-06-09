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


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Amazing Products</h6>
            </div>
            <div class="row">

                @foreach ($product_array as $item)

                <div class="col-lg-3 col-md-6 col-sm-12 mx-auto">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img style="width:200px; height: 200px" class="img-fluid mb-4 mx-auto" src="{{asset('img/'.$item->image)}}" alt="">
                        <h6 class="text-uppercase">{{$item->name}}</h6>
                        <p>{!! $item->description !!}</p>
                        <p>{{$item->category}}</p>

                        @if ($item->sale_price != 0.00 && $item->sale_price != null)
                            <h5 class="text-primary mb-0">{{$item->sale_price}} DH</h5>
                            <h5 class="text-primary mb-4" style="text-decoration: line-through;">{{$item->price}} DH</h5>
                        @else
                            <h5 class="text-primary mb-5">{{$item->price}} DH</h5>
                        @endif

                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>

                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    <!-- Products End -->

@endsection
