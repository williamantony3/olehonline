<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelProduct;
use App\ModelProductType;
use App\ModelCart;
use Illuminate\Support\Facades\Session;

class Product extends Controller
{
    public function detail($id){
        $product = ModelProduct::with(['productType', 'province'])->find($id);
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        $related = ModelProduct::orderByRaw('RAND()')->take(3)->get();
        return view('productDetail', ['product'=>$product, 'productTypes'=>$productTypes, 'carts'=>$carts, 'related'=>$related]);
    }

    public function viewByType($id){
        $products = ModelProduct::with(['productType', 'province'])->where('ProductTypeId', $id)->get();
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        return view('productType', ['products'=>$products, 'productTypes'=>$productTypes, 'carts'=>$carts]);
    }

    public function viewByProvince($id){
        $products = ModelProduct::with(['productType', 'province'])->where('ProvinceId', $id)->get();
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        return view('productProvince', ['products'=>$products, 'productTypes'=>$productTypes, 'carts'=>$carts]);
    }
}
