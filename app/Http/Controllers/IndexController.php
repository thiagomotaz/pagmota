<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\CartProducts;
use App\User;
use App\UserAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Cache;
use App\UserInfo;

class IndexController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        //product items on index page
        $products = Product::all();
        return view('store/index', ['products' => $products]);
    }

    public function show($id)
    {
        //show product item information
        $product = Product::find($id);
        return view('store/shop-single', ['product' => $product]);
    }
    
    public function confirmationMessage(Request $request)
    {
        //confirmation page, to show infos about generated boleto, like link and code
        return view('/store/confirmation', ['code' => $request->code, 'link' => $request->link]);
    }  
   
}
