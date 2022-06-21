@extends('layouts.main')


@section('content')


    <main>
        <div class="single-p small-container">

            @foreach ($product_array as $item)

            <div class="row-single_product">
                <div class="col-2">
                <!-- رازش تو width100%-->
                <img
                    id="big-img"
                    src="{{asset('img/'.$item->image)}}"
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
                <p>Home/{{$item->category}}</p>
                <h1>{{$item->name}}</h1>

                @if ($item->sale_price != 0.00 && $item->sale_price != null)
                    <h5 class="text-primary mb-0">{{$item->sale_price}} DH</h5>
                    <h5 class="text-primary mb-4" style="text-decoration: line-through;">{{$item->price}} DH</h5>
                @else
                    <h5 class="text-primary mb-5">{{$item->price}} DH</h5>
                @endif

                <select style="display: none" name="" id="">
                    <option value="1">Select Size</option>
                    <option value="2">XXL</option>
                    <option value="3">XL</option>
                    <option value="4">Medium</option>
                    <option value="5">Small</option>
                </select>
                <input type="number" />

                <form action="{{ route('add_to_cart') }}" method="post" style="display: inline;">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <input type="hidden" name="name" value="{{ $item->name }}">
                    <input type="hidden" name="price" value="{{ $item->price }}">
                    <input type="hidden" name="sale_price" value="{{ $item->sale_price }}">
                    <input type="hidden" name="image" value="{{ $item->image }}">
                    <input type="hidden" name="quantity" value="1">

                    <button class="btn-cart" type="submit">Add To Cart</button>
                </form>

                <!--<a href="#" class="btn-cart">Add To Cart</a>--> <br />
                <h4>Product's Details</h4>
                <i class="fa fa-indent" aria-hidden="true"></i>
                <p>
                    {!! $item->description !!}
                </p>
                </div>

            </div>

            @endforeach

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
                <p>50.00 DH</p>
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
                <p>50.00 DH</p>
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
                <p>50.00 DH</p>
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
                <p>50.00 DH</p>
              </div>
            </div>
          </div>
        </div>
      </main>

      <script src="js/single_products.js"></script>
@endsection
