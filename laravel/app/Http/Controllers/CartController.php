<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartModel;

class CartController extends Controller
{
    //
    public function getCart($id){
        $cart=CartModel::
        leftJoin('product','product.id','=','cart.product_id')
        ->select('cart.*','product.product_name','product.product_price','product.product_thumb1')
        ->where('user_id',$id)->get();
        return response()->json([
            "data"=>$cart,
            'status'=>'success',
            'count'=>count($cart)
        ]);
    }
}
