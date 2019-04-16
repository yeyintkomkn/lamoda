<?php

namespace App\Http\CustomClass;
use App\WaistCoat;

class WaistCoatData{

	private $waist_coat_data;

	public function __construct($suit_id){
		$suit_type=WaistCoat::findOrfail($suit_id);
		$this->set_waist_coat_data($suit_type);
	}

	private function set_waist_coat_data($suit_type){
		$this->waist_coat_data=$suit_type;
	}

	public function get_waist_coat_data(){
		return $this->waist_coat_data;
	}

	public static function get_all_waistcoate_type(){
		$data=WaistCoat::all();
        $arr=[];
        foreach ($data as $item) {
            $obj=new WaistCoatData($item->id);
            array_push($arr,$obj->get_waist_coat_data());
        }
        return $arr;
    }

}