<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\CartProducts;
use Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $products = Product::all();
        return view('store/index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('store/shop-single', ['product' => $product]);
    }

    public function addCart(Request $request)
    {
        //pega o id do cart do usuário antes
        $cart = Cart::where('user_id', '=', auth()->user()->id)->get();

        if (!$cart->first()) { //if dnt have cart, creeate one
            $idCart = Cart::create([
                'user_id' => auth()->user()->id
            ]);
            CartProducts::create([
                'product_id' => $request->input('product-id'),
                'cart_id' => $idCart->id,
                'quantity' => $request->input('quantity'),
            ]);

        } else {
            CartProducts::create([
                'product_id' => $request->input('product-id'),
                'cart_id' => $cart[0]->id,
                'quantity' => $request->input('quantity'),
            ]);
        }
    }

    public function deleteCart(Request $request)
    {
        //pega o id do cart do usuário antes
        CartProducts::where('id', $request->id)->delete();

    }

    public function showCart()
    {
        $cart = Cart::where('user_id', '=', auth()->user()->id)->get();
        // echo $cart;
        $cart_id = $cart[0]->id;
        $products = Cart::find($cart_id)->products;
        return view('store/cart', ['products' => $products]);
    }
}
