<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelProductType;
use App\ModelProduct;

class Index extends Controller
{
    public function index(){
        $productTypes = ModelProductType::all();
        $foods = ModelProduct::with("productType")->where('ProductTypeId', 1)->get();
        return view('index', ['productTypes'=>$productTypes, 'foods'=>$foods]);
    }
}
