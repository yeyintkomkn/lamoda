<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequestValidate;
use App\Http\CustomClass\ProductData;
class ProductController extends Controller
{
     public function product(){
         $product_type=ProductData::get_all_product_type();
        return view('site_admin.product')->with([
            'product_type'=>$product_type
        ]);
    }

    public function product_store(ProductRequestValidate $request,$type){
        $photo=$request->file('photo');
        $photo_ori_name=$photo->getClientOriginalName();
        $photo_name=time().'_'.$photo_ori_name;
        $photo->move(public_path('img/product_photo'),$photo_name);
        $suit_type_id=$request->get('suit_type');
        $price=$request->get('price');
        Product::create([
            'data_id'=>$suit_type_id,
            'photo'=>$photo_name,
            'product_type'=>$type,
            'price'=>$price,
        ]);

        return "true";
    }

    public function product_data(){
        $input_data=Product::orderBy('id', 'DESC')->get();
//        $input_data=Product::all();
        $product_data=ProductData::get_product($input_data);
        return response()->json($product_data);
//        return json_encode($product_data);
    }

    public function product_edit($id){
         $obj=new ProductData($id);
         $edit_suit=$obj->get_product_data();
         return response()->json($edit_suit);
    }

    public function product_update(Request $request,$type){
        $id=$request->get('id');
        $update_product=Product::where('id',$id)->first();
        $photo=$request->file('photo');
        if(isset($photo)){
            if(file_exists(public_path('img/product_photo/'.$update_product->photo))){
            unlink(public_path('img/product_photo/'.$update_product->photo));
            }
            $photo_ori_name=$photo->getClientOriginalName();
            $photo_name=time().'_'.$photo_ori_name;
            $photo->move(public_path('img/product_photo'),$photo_name);
            $update_product->photo=$photo_name;
        }
        $price=$request->get('price');
        $suit_type_id=$request->get('suit_type');
        $detail=$request->get('detail');
        $update_product->data_id=$suit_type_id;
        $update_product->product_type=$type;
        $update_product->price=$price;
        $update_product->update();
        return "true";
    }

    public function product_destroy($id){
        $obj=new ProductData($id);
        $delete_product=$obj->get_product_data();
         if(file_exists(public_path('img/product_photo/'.$delete_product->photo))){
            unlink(public_path('img/product_photo/'.$delete_product->photo));
        }
        $delete_product->delete();
        return "true";
    }
}
