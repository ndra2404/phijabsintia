<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartModel;
use App\Models\OrderModel;
use App\Models\OrderDetailModel;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function getCart($id){
        $cart=CartModel::
        leftJoin('product','product.id','=','cart.product_id')
        ->LeftJoin('product_type','product_type.id','=','product.product_type_id')
        ->select('cart.*','product.product_name','product.product_price','product.product_thumb1','product_type.product_type')
        ->where('user_id',$id)->get();
        return response()->json([
            "data"=>$cart,
            'status'=>'success',
            'count'=>count($cart)
        ]);
    }
    public function cart($id){
        if(!Auth::check()){
            return redirect('product')->with('success','Anda belum login, silahan login terlebih dahulu');
        }else{
            $cek = CartModel::where('user_id',Auth::user()->id)
            ->where('product_id',$id)
            ->count();
            if($cek>0){
                return redirect('product')->with('success','Data sudah ada');
            }
            $cart = new CartModel();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $id;
            $cart->qty = 1;
            $cart->save();
            return redirect('product')->with('success','Data berhasil diupdate');
    }
    }
    public function checkout(Request $request){
        if($request->isMethod('post')){
            foreach($request->pid as $key=>$cart){
                $data = CartModel::find($key);
                $data->qty = $request->quantity[$key];
                $data->save();
            }
            return redirect('checkout')->with('success','Data berhasil diupdate');
        }
        $cart = CartModel::
        leftJoin('product','product.id','=','cart.product_id')
        ->LeftJoin('product_type','product_type.id','=','product.product_type_id')
        ->select('cart.*','product.product_name','product_sku','product.product_price','product.product_thumb1','product_type.product_type')
        ->where('user_id',Auth::user()->id)->get();
        return view('cart.checkout',compact('cart'));
    }
    public function doProcess(Request $request){
        $lastorderId = OrderModel::orderBy('id', 'desc')->first();
        if($lastorderId==null){
            $lastorderId = 0;
        }else{
            $lastorderId = $lastorderId->order_no;
        }
        $lastIncreament = substr($lastorderId, -4);
        $lastcode = 'PH-' . date('ymd') . str_pad($lastIncreament + 1, 4, 0, STR_PAD_LEFT);
        $order = new OrderModel();
        $order->order_user_id = Auth::user()->id;
        $order->order_no = $lastcode;
        $order->order_date = date('Y-m-d H:i:s');
        $order->order_status = 'Awaiting Payment';
        $order->order_total = $request->total;
        $order->order_remark = $request->note;
        $order->metode_pembayaran = 'Transfer Bank';
        $order->save();
        $id = $order->id;

        $cart = CartModel::
        leftJoin('product','product.id','=','cart.product_id')
        ->LeftJoin('product_type','product_type.id','=','product.product_type_id')
        ->where('user_id',Auth::user()->id)->get();
        foreach($cart as $key=>$value){
            $orderDetail = new OrderDetailModel();
            $orderDetail->order_id = $id;
            $orderDetail->product_id = $value->product_id;
            $orderDetail->price = $value->product_price;
            $orderDetail->qty = $value->qty;
            $orderDetail->total = $value->qty * $value->product_price;
            $orderDetail->save();
        }
        CartModel::where('user_id',Auth::user()->id)->delete();
        return redirect('checkout')->with('success','Checkout berhasil');
    }
}
