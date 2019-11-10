<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelProductType;
use App\ModelProduct;
use App\ModelCart;
use Illuminate\Support\Facades\Session;

class Index extends Controller
{
    public function index(){
        $productTypes = ModelProductType::all();
        $foods = ModelProduct::with(["productType", "province"])->where('ProductTypeId', 1)->get();
        $souvenirs = ModelProduct::with(["productType", "province"])->where('ProductTypeId', 2)->get();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        return view('index', ['productTypes'=>$productTypes, 'foods'=>$foods, 'souvenirs'=>$souvenirs, 'carts'=>$carts]);
    }
}
