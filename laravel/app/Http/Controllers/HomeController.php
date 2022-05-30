<?php

namespace App\Http\Controllers;
use App\Models\ProductImageModel;
use App\Models\ProductModel;
use App\Models\OrderModel;
use App\Models\OrderDetailModel;
use App\Models\ProductTypeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{

    public function index(){
        $data = ProductModel::LeftJoin('product_type','product_type.id','=','product.product_type_id')
        ->select('product.*','product_type.product_type')
        ->orderBy('product.id','desc')
        ->limit(3)
        ->get();
        return view('home',compact('data'));
    }
    public function product(){
        $products = ProductModel::all();
        return view('product',compact('products'));
    }
    public function products(){
        $products = ProductModel::all();
        return view('products',compact('products'));
    }
    public function productbyid($id){
        $product = ProductModel::
        leftJoin('product_type','product_type.id','=','product.product_type_id')
        ->select('product.*','product_type.product_type')
        ->where('product.id',$id)->first();
        $images = ProductImageModel::where('product_id',$id)->get();
        return view('productdetail',compact('product','images'));
    }
    public function login(Request $request){
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect('/');
            }else{
                return redirect('login')->with('error','Login details are not valid');
            }
        }
        return view('login');
    }
    public function doregister(Request $request){
        if ($request->isMethod('post')) {
            if(User::where('email',$request->email)->count()>0){
                return redirect('login')->with('error','Email sudah terdaftar');
            }
            if($request->password!=$request->cpassword){
                return redirect('login')->with('error','Password tidak sama');
            }
            $user = new User;
            $user->name = $request->nama;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->level = 'customer';
            $user->no_hp = $request->nohp;
            $user->alamat = $request->alamat;
            $user->status = '1';
            $user->save();
            return redirect('/login')->with('success','Register berhasil');
        }
        return view('login');
    }
    public function logout(){
        Auth::logout();
        return redirect("/");
    }
    public function account(){
        $orders = OrderModel::where('order_user_id',Auth::user()->id)->get();
        return view('account.dashboard',compact('orders'));
    }
    public function confirmation(Request $request,$id){
        if ($request->isMethod('post')) {
            $destinationPath = 'assets/images/confirmation/';
            $thumb = $request->file('bukti');
            $extension = $thumb->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $thumb->move($destinationPath, $fileName);

            $order = OrderModel::find($id);
            $order->order_status = 'Waiting Confirmation';
            $order->order_norek = $request->norek;
            $order->order_nama = $request->name;
            $order->order_jumlah = $request->jumlah;
            $order->order_bukti = "confirmation/".$fileName;
            $order->save();
            return redirect('/account')->with('success','Order has been payment');
        }
        $order = OrderModel::where('id',$id)->first();
        return view('account.confirmation',compact('order'));
    }
    public function selesai(Request $request,$id){
        //if ($request->isMethod('post')) {
            $order = OrderModel::find($id);
            $order->order_status = 'Pesanan selesai';
            $order->save();
            return redirect('/account')->with('success','Order has been finish');
        //}
    }
}
