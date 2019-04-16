<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\CustomClass\WaistCoatData;
use App\WaistCoat;

class WaistCoatController extends Controller
{
    public function waist_coat(){
    	return view('site_admin.waist_coat');
    }

    public function waist_coat_data(){
    	$waist_coats=WaistCoat::all();
    	$waist_coat_arr=array();
    	foreach($waist_coats as $waist_coat){
    		$id=$waist_coat->id;
    		$obj=new WaistCoatData($id);
    		array_push($waist_coat_arr,$obj->get_waist_coat_data());
    	}
    	return response()->json($waist_coat_arr);
    }

    public function waist_coat_update(Request $request,$id){
    	$obj=new WaistCoatData($id);
    	$waist_coat_update=$obj->get_waist_coat_data();
    	$waist_coat_update->name=$request->get('name');
    	$waist_coat_update->detail=$request->get('detail');
    	$waist_coat_update->update();
    	return "true";
    }
}
