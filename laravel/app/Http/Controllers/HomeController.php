<?php

namespace App\Http\Controllers;
use App\Models\ProductImageModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{

    public function index(){
        return view('home');
    }
    public function product(){
        $products = ProductModel::all();
        return view('product',compact('products'));
    }
    public function products(){
        $products = ProductModel::all();
        return view('products',compact('products'));
    }

    public function login(Request $request){
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect('/');
            }
        }
        return view('login');
    }
    public function logout(){
        Auth::logout();
        return redirect("/");

    }
}
