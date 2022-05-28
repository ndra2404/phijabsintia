<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductTypeModel;


class ProductTypeController extends Controller
{
    //
    public function index(){
        $products = ProductTypeModel::all();
        return view('productype.index',compact('products'));
    }
    public function add(Request $request){
        if($request->isMethod('post')){
            $product = new ProductTypeModel;
            $product->product_type = $request->name;
            $product->save();
            return redirect('products/type')->with('success','Product Type berhasil ditambahkan');
        }
        return view('productype.add');
    }
    public function update(Request $request,$id){
        $product = ProductTypeModel::find($id);
        if($request->isMethod('post')){
            $product->product_type = $request->name;
            $product->save();
            return redirect('products/type')->with('success','Product Type berhasil diubah');
        }
        return view('productype.update',compact('product'));
    }
    public function delete($id){
        $product = ProductTypeModel::find($id);
        $product->delete();
        return redirect('products/type')->with('success','Product Type berhasil dihapus');
    }
}
