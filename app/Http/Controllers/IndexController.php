<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\CartProducts;

use Illuminate\Http\Request;
use Auth;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->user = Auth::user();
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
        $cart = Cart::find(auth()->user()->id);
        if($cart == null){
            //cria um carrinho pro usuario
            $idCart = Cart::create([
                'user_id' => auth()->user()->id
            ]);
            CartProducts::create([
                'product_id' => $request->input('product-id'),
                'cart_id' => $idCart,
                'quantity' => $request->input('quantity'),
            ]);
        }else{
            $idCart = $cart->id;
            CartProducts::create([
                'product_id' => $request->input('product-id'),
                'cart_id' => $idCart,
                'quantity' => $request->input('quantity'),
            ]);
        }
       
    }

    public function showCart()
    {

        $products = Cart::find(auth()->user()->id)->products;
        return view('store/cart', ['products' => $products]);
    }
}
