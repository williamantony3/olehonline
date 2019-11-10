<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCart;
use App\ModelProductType;
use Illuminate\Support\Facades\Session;

class Cart extends Controller
{
    public function add($id, Request $request){
        $this->validate($request, [
            'kuantitas' => 'required'
        ]);

        $data =  new ModelCart();
        $data->ProductId = $id;
        $data->Quantity = $request->kuantitas;
        $data->CustomerId = Session::get('id');
        $data->save();

        return redirect('/');
    }

    public function show(){
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        return view('cartDetail', ['productTypes'=>$productTypes, 'carts'=>$carts]);
    }

    public function delete($id){
        $cart = ModelCart::find($id);
        $cart->delete();
        return redirect('/cart');
    }
}
