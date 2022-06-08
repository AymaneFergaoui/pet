<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function cart()
    {
        return view('cart');
    }

    public function add_to_cart(Request $request)
    {
        if ($request->session()->has('cart')) {

            $cart = $request->session()->get('cart');

            $products_array_ids = array_column($cart, 'id');

            $id = $request->input('id');

            //add product to cart
            if (!in_array($id,$products_array_ids)) {

                $name = $request->input('name');
                $image = $request->input('image');
                $price = $request->input('price');
                $quantity = $request->input('quantity');
                $sale_price = $request->input('sale_price');

                if ($sale_price != null) {
                    $best_price = $sale_price;
                } else {
                    $best_price = $price;
                }

                $product_array = array(
                    'id'=>$id,
                    'name'=>$name,
                    'image'=>$image,
                    'price'=>$best_price,
                    'quantity'=>$quantity,
                );


                $cart[$id] = $product_array;
                $request->session()->put('cart', $cart);



                //product already in cart
            } else {
                echo "<script>alert('product is already in cart');</script>";
            }

            return view('cart');

            //if dont have in a cart in session
        } else {
            $cart = array();

            $id = $request->input('id');
            $name = $request->input('name');
            $image = $request->input('image');
            $price = $request->input('price');
            $quantity = $request->input('quantity');
            $sale_price = $request->input('sale_price');

            if ($sale_price != null) {
                $best_price = $sale_price;
            } else {
                $best_price = $price;
            }

            $product_array = array(
                'id'=>$id,
                'name'=>$name,
                'image'=>$image,
                'price'=>$best_price,
                'quantity'=>$quantity,
            );


            $cart[$id] = $product_array;
            $request->session()->put('cart', $cart);

            return view('cart');
        }

    }
}
