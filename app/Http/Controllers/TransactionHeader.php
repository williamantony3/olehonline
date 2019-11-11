<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelProductType;
use App\ModelCart;
use Illuminate\Support\Facades\Session;
use App\ModelTransactionHeader;
use App\ModelTransactionDetail;
use App\ModelProduct;
use Illuminate\Support\Facades\Hash;
use File;

class TransactionHeader extends Controller
{
    public function checkout(){
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        return view('checkout', ['productTypes'=>$productTypes, 'carts'=>$carts]);
    }

    public function add(Request $request){
        $this->validate($request, [
            'bukti' => 'required',
            'alamat_pengiriman' => 'required',
            'kurir' => 'required',
            'metode_pembayaran' => 'required'
        ]);
        $bukti = $request->file('bukti');

        $data =  new ModelTransactionHeader();
        $data->CustomerId = Session::get('id');
        $data->ShippingAddress = $request->alamat_pengiriman;
        $data->Status = 1;
        $data->CourierOption = $request->kurir;
        $data->CourierCost = 10000;
        $data->PaymentMethod = $request->metode_pembayaran;
        $data->save();
        $tranId = $data->TransactionId;

        $dataTran = ModelTransactionHeader::find($tranId);
        $dataTran->PaidReceipt = $tranId.'.'.$bukti->getClientOriginalExtension();
        $dataTran->save();
        $tujuan_upload = public_path('/assets/images/bukti/');
        $bukti->move($tujuan_upload, $tranId.'.'.$bukti->getClientOriginalExtension());
        return redirect('/transactions/addDetails/'.$tranId);
    }

    public function view(){
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        if(Session::get('status') == 1){
            $transactions = ModelTransactionHeader::with('transactionDetails.product', 'customer')->get();
        }else{
            $transactions = ModelTransactionHeader::with('transactionDetails.product')->where('CustomerId', Session::get('id'))->get();
        }
        return view('transactionsView', ['transactions'=>$transactions, 'productTypes'=>$productTypes, 'carts'=>$carts]);
    }

    public function confirm($id){
        $transaction = ModelTransactionHeader::find($id);
        // $transaction = ModelTransactionHeader::with('transactionDetails.product')->where('TransactionId', $id)->get()->first();
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        return view('transactionConfirm', ['transaction'=>$transaction, 'productTypes'=>$productTypes, 'carts'=>$carts]);
    }

    public function accept($id){
        $transaction = ModelTransactionHeader::find($id);
        $transaction->status = 2;
        $transaction->CourierReceiptNumber = str_random(10);
        $transaction->save();

        return redirect('/transactions/view');
    }
    public function deny($id){
        $transaction = ModelTransactionHeader::find($id);
        $transaction->status = 0;
        $transaction->save();

        $tranDet = ModelTransactionDetail::with('product')->where('TransactionId', $id)->get();
        foreach($tranDet as $tran){
            $prod = ModelProduct::find($tran->ProductId);
            $prod->ProductStock += $tran->Quantity;
            $prod->save();
        }
        return redirect('/transactions/view');
    }
}
