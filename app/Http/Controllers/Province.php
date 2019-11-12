<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelProvince;
use App\ModelProductType;
use App\ModelCart;
use App\ModelProduct;
use Illuminate\Support\Facades\Session;

class Province extends Controller
{
    public function view(){
        $provinces = ModelProvince::all();
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        return view('explore', ['provinces'=>$provinces, 'carts'=>$carts, 'productTypes'=>$productTypes]);
    }

    public function detail($id){
        $provinces = ModelProvince::find($id);
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        $products = ModelProduct::all()->where('ProvinceId', $id);
        return view('provinceDetail', ['provinces'=>$provinces, 'carts'=>$carts, 'productTypes'=>$productTypes, "products"=>$products]);
    }
}
