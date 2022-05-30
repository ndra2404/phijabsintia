<?php

namespace App\Http\Controllers;
use App\Models\ProductImageModel;
use App\Models\ProductModel;
use App\Models\ProductTypeModel;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function add(Request $request){
        $destinationPath = 'assets/images/products/';
        if ($request->isMethod('post')) {

            $lastorderId = ProductModel::orderBy('id', 'desc')->first()->product_sku;
            $lastIncreament = substr($lastorderId, -4);
            $newsku = 'SKU-' . date('ymd') . str_pad($lastIncreament + 1, 4, 0, STR_PAD_LEFT);

            $thumb = $request->file('thumb');

            $extension = $thumb->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $thumb->move($destinationPath."thumb", $fileName);

            $thumb2 = $request->file('thumb2');
            $extension = $thumb2->getClientOriginalExtension();
            $fileName2 = rand(11111, 99999) . '.' . $extension;
            $thumb2->move($destinationPath."thumb", $fileName2);

            $data = new ProductModel();
            $data->product_name = $request->name;
            $data->product_desc = $request->description;
            $data->product_type_id = $request->type;
            $data->product_price = $request->price;
            $data->product_thumb1 = "products/thumb/".$fileName;
            $data->product_thumb2 = "products/thumb/".$fileName2;
            $data->product_sku = $newsku;
            $data->product_stock = $request->stock;
            $data->save();
            $productid = $data->id;

            foreach ($request->file('filename') as $image) {
                $extension = $image->getClientOriginalName();
                $filenames = date('Ymdhis')."-".'.' . $extension;
                $image->move($destinationPath, $filenames);
                $banner = new ProductImageModel;
                $banner->product_id = $productid;
                $banner->product_image = "products/".$filenames;
                $banner->save();
            }
            return redirect('products')->with('success','Data berhasil disimpan');
        }
        $product_type = ProductTypeModel::all();
        return view('product.add',compact('product_type'));
    }
    public function delete($id){
        $data = ProductModel::find($id);
        $data->delete();
        return redirect('products')->with('success','Data berhasil dihapus');
    }
    public function update($id,Request $request){
        $destinationPath = 'assets/images/products/';
        if ($request->isMethod('post')) {

            $thumb = $request->file('thumb');
            if($thumb != null){
                $extension = $thumb->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;
                $thumb->move($destinationPath."thumb", $fileName);

            }
            $thumb2 = $request->file('thumb2');
            if($thumb2 != null){
                $extension = $thumb2->getClientOriginalExtension();
                $fileName2 = rand(11111, 99999) . '.' . $extension;
                $thumb2->move($destinationPath."thumb", $fileName2);
            }

            $data = ProductModel::find($id);
            $data->product_name = $request->name;
            $data->product_desc = $request->description;
            $data->product_type_id = $request->type;
            $data->product_price = $request->price;
            if($thumb != null){
                $data->product_thumb1 = "products/thumb/".$fileName;
            }
            if($thumb2 != null){
                $data->product_thumb2 = "products/thumb/".$fileName2;
            }
            $data->product_stock = $request->stock;
            $data->save();

            if($request->file('filename') != null){
                foreach ($request->file('filename') as $image) {
                    $extension = $image->getClientOriginalName();
                    $filenames = date('Ymdhis')."-".'.' . $extension;
                    $image->move($destinationPath, $filenames);
                    $banner = new ProductImageModel;
                    $banner->product_id = $productid;
                    $banner->product_image = "products/".$filenames;
                    $banner->save();
                }
            }
            return redirect('products')->with('success','Data berhasil diupdate');
        }
        $product_type = ProductTypeModel::all();
        $product = ProductModel::find($id);
        return view('product.update',compact('product_type','product'));
    }
}
