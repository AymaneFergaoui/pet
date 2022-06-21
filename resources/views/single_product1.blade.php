@extends('layouts.main')


@section('content')


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
