<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\CartProducts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\UserInfo;
use App\UserAddress;

class CartController extends Controller
{
    public function index()
    {
        //show user cart
        if (!Auth::check()) { //storing in cookies yet
            return view('store/cart');
        } else { // logged
            $cart = Cart::where('user_id', '=', auth()->user()->id)->get(); //already hav a cart, show the cart products
            $cart_id = $cart[0]->id;
            $products = Cart::find($cart_id)->products;
            return view('store/cart', ['products' => $products]);
        }
    }

    public function addCart(Request $request)
    {
        //add item on user cart
        $cart = Cart::where('user_id', '=', auth()->user()->id)->get();
        return CartProducts::create([
            'product_id' => $request->input('product_id'),
            'cart_id' => $cart[0]->id,
            'quantity' => $request->input('quantity'),
        ]);
    }

    public function deleteCart(Request $request)
    {
        //delete item from user cart
        return CartProducts::where('id', $request->id)->delete();
    }

    public function verifyEmptyCart()
    {
        //verify if cart_products hav items for auth user
        if (Auth::check()) {
            return DB::table('cart_product')
                ->join('cart', function ($join) {
                    $join->on('cart_product.cart_id', '=', 'cart.id')
                        ->where('cart.user_id', '=', auth()->user()->id);
                })
                ->get();
        }
    }

    public function getCart()
    {
        //get user cart
        if (!Auth::check()) {
            return view('store/cart');
        } else {
            $cart = Cart::where('user_id', '=', auth()->user()->id)->get(); //se n tem, cria
            $cart_id = $cart[0]->id;
            $products = Cart::find($cart_id)->products;
            return json_encode($products);
        }
    }

    public function checkout()
    {
        //proccess the cart, finish the order
        if (Auth::check() && $this->verifyEmptyCart()->first() != NULL) { //verify if is logged in and cart not empty before checkout
            $cart = Cart::where('user_id', '=', auth()->user()->id)->get();
            $cart_id = $cart[0]->id;
            //send neccessary data for view, like buyer informations to use for transactions etc
            $products = Cart::find($cart_id)->products;
            $buyerInfo = UserInfo::where('user_id', '=', auth()->user()->id)->get();
            $buyerAddress = UserAddress::where('user_id', '=', auth()->user()->id)->get();
            return view('store/checkout', ['products' => $products, 'buyerInfo' => $buyerInfo, 'buyerAddress' => $buyerAddress]);
        }
        return redirect('/cart');
    }
}
