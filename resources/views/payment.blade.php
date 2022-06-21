@extends('layouts.main')

@section('content')

    <section class="container mt-2 my-3 py-5">
        <div class="container mt-2 text-center">
            <h4>Payment</h4>

            @if(Session::has('total') && Session::get('total') != null)
                @if(Session::has('order_id') && Session::get('order_id') != null )
                    <div class="form-group checkout-btn-container">
                        <h4 style="color: blue" class="my-5">Total : {{Session::get('total')}} DH</h4>
                    </div>
                @endif
            @endif
        </div>
    </section>

@endsection
