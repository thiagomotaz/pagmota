<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\CartProducts;
use App\UserAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cache;
use Illuminate\Support\Facades\DB;
use App\UserInfo;

class IndexController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
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

    public function teste()
    {
        if (isset($_COOKIE["products_cart"])) {

            $cartJson = json_decode(utf8_encode($_COOKIE["products_cart"]));
            // var_dump($cartJson);
            // $cart = Cart::where('user_id', '=', auth()->user()->id)->get();
            foreach ($cartJson as $cartLocal) { //ta encarando como um so item
                echo ($cartLocal->product_name);
                return;
            }
        }
    }

    public function addUserInfos(Request $request)
    {
        return UserInfo::create([
            'cpf' => $request->input('cpf'),
            'area_code' => $request->input('ddd'),
            'user_id' => auth()->user()->id,
            'phone_number' => $request->input('celular'),
        ]);
    }

    public function addUserAddress(Request $request)
    {
        return UserAddress::create([
            'street' => $request->input('rua'),
            'number' => $request->input('numero'),
            'user_id' => auth()->user()->id,
            'neighborhood' => $request->input('bairro'),
            'city' => $request->input('cidade'),
            'state' => $request->input('estado'),
        ]);
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
                'product_id' => $request->input('product_id'),
                'cart_id' => $idCart->id,
                'quantity' => $request->input('quantity'),
            ]);
        } else {
            CartProducts::create([
                'product_id' => $request->input('product_id'),
                'cart_id' => $cart[0]->id,
                'quantity' => $request->input('quantity'),
            ]);
        }
    }

    public function deleteCart(Request $request)
    {
        CartProducts::where('id', $request->id)->delete();
    }

    public function verifyEmptyCart()
    {
        //verifica se ta autenticado ou nao pra ver se ta vazio, pq de qq forma vai ter que fazer login(adiciona os itens dos cookies)
        if (Auth::check()) {
            return DB::table('cart_product')
                ->join('cart', function ($join) {
                    $join->on('cart_product.cart_id', '=', 'cart.id')
                        ->where('cart.user_id', '=', auth()->user()->id);
                })
                ->get();
        }
    }

    public function checkout()
    {
        if ($this->verifyEmptyCart()->first() != NULL) {
            if (Auth::check()) {
                $cart = Cart::where('user_id', '=', auth()->user()->id)->get(); //se n tem, cria
                if (!$cart->first()) { //if dnt have cart, creeate one
                    $idCart = Cart::create([
                        'user_id' => auth()->user()->id
                    ]);
                    $cart_id = $idCart->id;
                } else {
                    $cart_id = $cart[0]->id;
                }
                // return $cart_id;
                $products = Cart::find($cart_id)->products;

                $buyerInfo = UserInfo::where('user_id', '=', auth()->user()->id)->get();

                $buyerAddress = UserAddress::where('user_id', '=', auth()->user()->id)->get();

                return view('store/checkout', ['products' => $products, 'buyerInfo' => $buyerInfo, 'buyerAddress' => $buyerAddress]);
            }
        }
        return redirect('/cart');
    }
    public function showCart()
    {
        if (!Auth::check()) {
            return view('store/cart');
        } else {
            $cart = Cart::where('user_id', '=', auth()->user()->id)->get(); //se n tem, cria
            if (!$cart->first()) { //if dnt have cart, creeate one
                Cart::create([
                    'user_id' => auth()->user()->id
                ]);
            }
            $cart_id = $cart[0]->id;
            $products = Cart::find($cart_id)->products;
            return view('store/cart', ['products' => $products]);
        }
    }

    public function getCart()
    {
        if (!Auth::check()) {
            return view('store/cart');
        } else {
            $cart = Cart::where('user_id', '=', auth()->user()->id)->get(); //se n tem, cria
            if (!$cart->first()) { //if dnt have cart, creeate one
                Cart::create([
                    'user_id' => auth()->user()->id
                ]);
            }
            $cart_id = $cart[0]->id;
            $products = Cart::find($cart_id)->products;
            return json_encode($products);
        }
    }
}
