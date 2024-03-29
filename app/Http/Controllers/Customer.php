<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelCustomer;
use App\ModelProductType;
use Illuminate\Support\Facades\Session;
use App\ModelCart;

class Customer extends Controller
{
    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;

        $data = ModelCustomer::where('email', $email)->first();
        if($data){
            if(md5($password) == $data->Password){
                Session::put('id', $data->CustomerId);
                Session::put('name', $data->Name);
                Session::put('email', $data->Email);
                Session::put('login', TRUE);
                Session::put('status', $data->Status);
                return redirect('/');
            }else{
                return redirect('/')->with('alert', 'Password salah');
            }
        }else{
            return redirect('/')->with('alert', 'Email tidak terdaftar');
        }
    }

    public function register(Request $request){
        $productTypes = ModelProductType::all();
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        return view('register', ['productTypes'=>$productTypes, 'carts'=>$carts]);
    }

    public function registerPost(Request $request){

        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|unique:customers',
            'username' => 'required|unique:customers',
            'password' => 'required',
            'alamat' => 'required',
        ]);

        $data =  new ModelCustomer();
        $data->Name = $request->nama;
        $data->Email = $request->email;
        $data->Username = $request->username;
        $data->Password = md5($request->password);
        $data->Address = $request->alamat;
        $data->Status = 0;
        $data->save();

        return redirect('/register')->with('alert-success','Kamu berhasil daftar');
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }

    public function editProfile(){
        $productTypes = ModelProductType::all();
        $customer = ModelCustomer::find(Session::get('id'));
        $carts = ModelCart::with("product")->where('CustomerId', Session::get('id'))->get();
        return view('/editProfile', ['customer'=>$customer, 'carts'=>$carts])->with('productTypes', $productTypes);
    }

    public function editProfilePost(Request $request){

        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'alamat' => 'required',
        ]);

        $data =  ModelCustomer::find(Session::get('id'));
        $data->Name = $request->nama;
        $data->Email = $request->email;
        $data->Username = $request->username;
        $data->Password = md5($request->password);
        $data->Address = $request->alamat;
        $data->Status = 0;
        $data->save();

        return redirect('/editProfile')->with('alert-success','Data berhasil disimpan');
    }
}
