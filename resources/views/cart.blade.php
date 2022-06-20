@extends('layouts.main')


@section('content')

<section class="cart container mt-2 my-3 py-5">
    <div class="container mt-2">
        <h4>Your Cart</h4>
    </div>

    <table class="pt-5">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>


        @if(Session::has('cart'))

            @foreach(Session::get('cart') as $product)

                <tr>
                    <td>
                        <div class="product-info">
                            <img src="{{asset('img/'.$product['image'])}}">
                            <div>
                                <p>{{$product['name']}}</p>
                                <small>{{$product['price']}}<span>DH</span></small>
                                <br>
                                <form method="POST" action="{{ route('remove_to_cart') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product['id'] }}">
                                    <input type="submit" name="remove_btn" class="remove-btn" value="remove">
                                </form>
                            </div>
                        </div>
                    </td>

                    <td>
                        <form>

                            <input type="number" name="quantity" value="{{$product['quantity']}}">

                            <input type="submit" value="edit" class="edit-btn" name="edit_product_quantity_btn">
                        </form>
                    </td>

                    <td>
                        <span class="product-price">{{ $product['quantity'] * $product['price']}} DH</span>
                    </td>
                </tr>
            @endforeach

        @endif

    </table>


    <div class="cart-total">
        <table>
            @if(Session::has('cart'))
                @if (Session::has('total'))
                    <tr>
                        <td>Total</td>
                        <td>{{Session::get('total')}} DH</td>
                    </tr>
                @endif
            @endif
        </table>
    </div>


    <div class="checkout-container">
        @if (Session::has('total'))
            @if (Session::get('total') != null)
                <form method="GET" action="{{ route('checkout') }}">
                    <input type="submit" class="btn checkout-btn" value="Checkout" name="">
                </form>
            @endif
        @endif
    </div>






</section>


@endsection
