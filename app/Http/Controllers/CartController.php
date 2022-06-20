<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function cart(){
        return view('cart');
    }

    public function add_to_cart(Request $request){
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


            $this->calculTotalCart($request);
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

            if ($sale_price != 0.00 && $sale_price != null) {
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

            $this->calculTotalCart($request);
            return view('cart');
        }

    }

    public function calculTotalCart(Request $request)
    {
        $cart = $request->session()->get('cart');
        $total_price = 0;
        $total_quantity = 0;

        foreach ($cart as $id => $product) {
            $product = $cart[$id];
            $price = $product['price'];
            $quantity = $product['quantity'];

            $total_price += ($price * $quantity);
            $total_quantity += $quantity;

        }

        $request->session()->put('total',$total_price);
        $request->session()->put('quantity',$total_quantity);
    }

    public function remove_to_cart(Request $request)
    {

        if ($request->session()->has('cart')) {

            $id = $request->input('id');
            $cart = $request->session()->get('cart');

            unset($cart[$id]);

            $request->session()->put('cart',$cart);

            $this->calculTotalCart($request);
        }

        return view('cart');
    }

    function checkout()
    {
        return view('checkout');
    }

    public function place_order(Request $request)
    {
        if ($request->session()->hase('cart')) {
            $name = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $city = $request->input('city');
            $address = $request->input('address');

            $cost = $request->session()->get('total');
            $status = "not paid";
            $date = date('Y/M/d');

            $cart = $request->session()->get('cart');

        }else {
            return redirect('/');
        }
    }

}
