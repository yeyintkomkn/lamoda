<?php

namespace App\Http\CustomClass;
use App\Accessory;

class AccessoryData{

	private $accesory_data;

	public function __construct($suit_id){
		$accesory=Accessory::findOrfail($suit_id);
		$this->set_accesory_data($accesory);
	}

	private function set_accesory_data($accesory){
		$this->accesory_data=$accesory;
	}

	public function get_accesory_data(){
		return $this->accesory_data;
	}

	public static function get_all_accesories(){
		$accesorys=Accessory::all();
        $arr=[];
        foreach ($accesorys as $item) {
            $obj=new AccessoryData($item->id);
            array_push($arr,$obj->get_accesory_data());
        }
        return $arr;
    }

 //    public function get_accesory_use_suit(){
 //    	return $this->accesory_data->suits;
 //    }


}