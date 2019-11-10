<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelProductType;
use App\ModelCart;
use Illuminate\Support\Facades\Session;
use App\ModelTransactionHeader;
use App\ModelTransactionDetail;
use Illuminate\Support\Facades\Hash;

class TransactionHeader extends Controller
{
    public function checkout(){
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        return view('checkout', ['productTypes'=>$productTypes, 'carts'=>$carts]);
    }

    public function add(Request $request){
        $this->validate($request, [
            'alamat_pengiriman' => 'required',
            'kurir' => 'required',
            'metode_pembayaran' => 'required'
        ]);

        $data =  new ModelTransactionHeader();
        $data->CustomerId = Session::get('id');
        $data->ShippingAddress = $request->alamat_pengiriman;
        $data->Status = 0;
        $data->CourierReceiptNumber = str_random(10);
        $data->CourierOption = $request->kurir;
        $data->CourierCost = 10000;
        $data->PaymentMethod = $request->metode_pembayaran;
        $data->save();
        $tranId = $data->TransactionId;
        return redirect('/transactions/addDetails/'.$tranId);

    }
}
