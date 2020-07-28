<?php

namespace App\Http\Controllers;

use App\UserInfo;
use App\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function addUserInfos(Request $request)
    {
        //add neccessary user informations to checkout, just in first time
        return UserInfo::create([
            'cpf' => $request->input('cpf'),
            'area_code' => $request->input('ddd'),
            'user_id' => auth()->user()->id,
            'phone_number' => $request->input('celular'),
        ]);
    }

    public function addUserAddress(Request $request)
    {
        //add neccessary user address to checkout, just in first time
        return UserAddress::create([
            'street' => $request->input('rua'),
            'number' => $request->input('numero'),
            'user_id' => auth()->user()->id,
            'neighborhood' => $request->input('bairro'),
            'city' => $request->input('cidade'),
            'state' => $request->input('estado'),
        ]);
    }

    public function verifyUsersAddressInfos()
    {
        //verifica se ta autenticado ou nao pra ver se ta vazio, pq de qq forma vai ter que fazer login(adiciona os itens dos cookies)
        if (Auth::check()) {
            $address = UserAddress::where('user_id', '=', auth()->user()->id)->get(); //se n tem, cria
            $info = UserInfo::where('user_id', '=', auth()->user()->id)->get(); //se n tem, cria
            if ($address->first() && $info->first()) {
                return 1;
            }
        }
        return 0;
    }
}
