<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suit_type;
use App\Suit;
use App\Http\CustomClass\SuitTypeData;
use App\Http\CustomClass\SuitData;

class SuitController extends Controller
{
    public function suit_type(){
    	return view('site_admin.suit_type');
    }

    // public function suit_type_store(Request $request){
    // 	Suit_type::create([
    // 		'name' => $request->get('name')
    // 	]);
    // 	return "true";
    // }

    public function suit_type_data(){
    	$suit_data=array();
    	$suit_types=Suit_type::all();
    	foreach($suit_types as $suit_type){
    		$obj=new SuitTypeData($suit_type->id);
    		array_push($suit_data,$obj->get_suit_type_data());
    	}

    	return response()->json(['data'=>$suit_data]);
    }

    public function suit_type_edit($id){
        $obj=new SuitTypeData($id);
        $data=$obj->get_suit_type_data();
        return response()->json($data);
    }

    public function suit_type_update(Request $request,$id){
        $obj=new SuitTypeData($id);
        $update_suit_type=$obj->get_suit_type_data();
        $update_suit_type->name=$request->get('name');
        $update_suit_type->detail=$request->get('detail');
        $update_suit_type->update();
        return "true";
    }

    // public function suit_type_destroy($id){
    //     $obj=new SuitTypeData($id);
    //     $delete_suit_type=$obj->get_suit_type_data();
    //     $delete_suit_type->delete();
    //     return "true";
    // }

    // public function suit_use_count($id){
    //     $obj=new SuitTypeData($id);
    //     $suit_use_count=$obj->get_suit_type_use_suit();
    //     return $suit_use_count->count();
    // }
}
