<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Cart;
use App\CartProducts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registered(Request $request, $user)
    {
        if ($_COOKIE["products_cart"] != null) {
            $cartJson = json_decode(utf8_encode($_COOKIE["products_cart"]));
            // var_dump($cartJson);
            $cart = Cart::where('user_id', '=', auth()->user()->id)->get();
            if (!$cart->first()) { //if dnt have cart, creeate one
                $idCart = Cart::create([
                    'user_id' => auth()->user()->id
                ]);
            }
            foreach ($cartJson as $cartLocal) { //ta encarando como um so item
                echo $cartLocal->product_id;

                if (isset($idCart)) {
                    CartProducts::create([
                        'product_id' => $cartLocal->product_id,
                        'cart_id' => $idCart->id,
                        'quantity' => $cartLocal->quantity,
                    ]);
                } else {
                    CartProducts::create([
                        'product_id' => $cartLocal->product_id,
                        'cart_id' => $cart[0]->id,
                        'quantity' => $cartLocal->quantity,
                    ]);
                }
            }
        }
        //remove os cookies
        // Cookies . remove('products_cart');
        setcookie("products_cart", "", time() - 3600, '/');
    }
}
