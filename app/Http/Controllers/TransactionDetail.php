<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCart;
use App\ModelTransactionDetail;
use Illuminate\Support\Facades\Session;
use App\ModelProduct;

class TransactionDetail extends Controller
{
    public function add($id){
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();

        foreach($carts as $cart){
            $data =  new ModelTransactionDetail();
            $data->TransactionId = $id;
            $data->ProductId = $cart->ProductId;
            $data->Quantity = $cart->Quantity;
            $data->save();

            $product = ModelProduct::find($cart->ProductId);
            $product->ProductStock -= $cart->Quantity;
            $product->save();
            $cart->delete();
        }

        
        return redirect('/transactions/view/');
    }
}
