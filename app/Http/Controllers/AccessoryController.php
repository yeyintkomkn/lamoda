<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accessory;
use App\Http\CustomClass\AccessoryData;

class AccessoryController extends Controller
{
    public function accessory(){
    	return view('site_admin.accessories');
    }

    public function accessory_store(Request $request){
    	Accessory::create([
    		'name' => $request->get('name'),
    		'detail' => $request->get('detail')
    	]);
    	return "true";
    }

    public function accessory_data(){
    	$suit_data=array();
    	$accessorys=Accessory::all();
    	foreach($accessorys as $accessory){
    		$obj=new AccessoryData($accessory->id);
    		array_push($suit_data,$obj->get_accesory_data());
    	}

    	return response()->json(['data'=>$suit_data]);
    }

    public function accessory_edit($id){
        $obj=new AccessoryData($id);
        $data=$obj->get_accesory_data();
        return response()->json(['data'=>$data]);
    }

    public function accessory_update(Request $request){
        $id=$request->get('id');
        $obj=new AccessoryData($id);
        $update_accessory=$obj->get_accesory_data();
        $update_accessory->name=$request->get('name');
        $update_accessory->detail=$request->get('detail');
        $update_accessory->update();
        return "true";
    }

    public function accessory_destroy($id){
        $obj=new AccessoryData($id);
        $delete_accessory=$obj->get_accesory_data();
        $delete_accessory->delete();
        return "true";
    }
}
