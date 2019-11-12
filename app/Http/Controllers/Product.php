<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelProduct;
use App\ModelProductType;
use App\ModelCart;
use App\ModelProvince;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Builder;

class Product extends Controller
{
    public function detail($id){
        $product = ModelProduct::with(['productType', 'province'])->find($id);
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        $related = ModelProduct::orderByRaw('RAND()')->take(4)->get();
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

    public function search(Request $request){
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        // $terms = preg_split('/\s+/', $request->keyword, -1, PREG_SPLIT_NO_EMPTY);
        $terms = $request->keyword;

        $products = ModelProduct::whereHas('province', function (Builder $query) use ($terms) {
                $query->where('Name', 'like', '%' . $terms . '%');
        })->orWhere('ProductName', 'like', '%' . $terms . '%')->get();

        // $products = ModelProduct::whereHas('province', function (Builder $query) use ($terms) {
        //     foreach ($terms as $term) {
        //         // Loop over the terms and do a search for each.
        //         $query->orWhere('Name', 'like', '%' . $term . '%');
        //     }
        // })->orWhere(function (Builder $query) use ($terms) {
        //     foreach ($terms as $term) {
        //         $query->orWhere('ProductName', 'like', '%' . $term . '%');
        //     }
        // })->get();
        return view('productSearch', ['products'=>$products, 'productTypes'=>$productTypes, 'carts'=>$carts]);
    }

    public function view(){
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        $products = ModelProduct::paginate(5);
        return view('productView', ['products'=>$products, 'productTypes'=>$productTypes, 'carts'=>$carts]);
    }

    public function add(){
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        $provinces = ModelProvince::all();
        return view('productAdd', ['productTypes'=>$productTypes, 'carts'=>$carts, 'provinces'=>$provinces]);
    }

    public function addProductPost(Request $request){
        $this->validate($request, [
            'ProductName' => 'required',
            'ProvinceId' => 'required',
            'ProductTypeId' => 'required',
            'ProductPrice' => 'required',
            'Description' => 'required',
            'ProductStock' => 'required',
            'ProductImage' => 'required'
        ]);
        $product = new ModelProduct();
        $product->ProductName = $request->ProductName;
        $product->ProvinceId = $request->ProvinceId;
        $product->CustomerId = $request->CustomerId;
        $product->ProductTypeId = $request->ProductTypeId;
        $product->ProductPrice = $request->ProductPrice;
        $product->Description = $request->Description;
        $product->ProductStock = $request->ProvinceId;
        $product->CustomerId = Session::get('id');
        $gambar = $request->file('ProductImage');
        $product->save();
        $id = $product->ProductId;

        //simpan gambar
        $prodLagi = ModelProduct::find($id);
        $prodLagi->ProductImage = $id.'.'.$gambar->getClientOriginalExtension();
        $prodLagi->save();
        $tujuan_upload = public_path('/assets/images/product/');
        $gambar->move($tujuan_upload, $id.'.'.$gambar->getClientOriginalExtension());

        return redirect('/product/view');
    }

    public function delete($id){
        $product = ModelProduct::find($id);
        $product->delete();
        return redirect('/product/view');
    }
}
