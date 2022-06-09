<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\OrderDetailModel;
use PDF;

class PesananController extends Controller
{
    //
    public function index(){
        $orders = OrderModel::all();
        return view('pesanan.index',compact('orders'));
    }
    public function confirm($id, Request $request){
        if($request->isMethod('post')){
            $order = OrderModel::find($id);
            $order->order_status = $request->status;
            $order->save();
            return redirect('/pesanan')->with('success','Status berhasil diubah');
        }
        $data = OrderModel::find($id);
        return view('pesanan.add',compact('data'));
    }
    public function detail($id, Request $request){
        if($request->isMethod('post')){
            $order = OrderModel::find($id);
            $order->order_status = $request->status;
            $order->save();
            return redirect('/pesanan')->with('success','Status berhasil diubah');
        }
        $data = OrderModel::find($id);
        $orderdetail = OrderDetailModel::leftJoin('product as products','orders_detail.product_id','=','products.id')
        ->LeftJoin('product_type','products.product_type_id','=','product_type.id')
        ->where('orders_detail.order_id',$id)
        ->select('orders_detail.*','products.product_name as product_name','product_type.product_type','product_sku')
        ->get();
        return view('pesanan.detail',compact('data','orderdetail'));
    }
    public function print(){
        $orders = OrderModel::all();
        $pdf = PDF::loadview('pesanan.print',['orders'=>$orders]);
    	return $pdf->stream("laporan-".date('Ymd hi').".pdf");
    }
    public function review($id, Request $request){

    }
}
