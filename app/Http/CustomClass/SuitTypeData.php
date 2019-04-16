<?php

namespace App\Http\CustomClass;
use App\Suit_type;

class SuitTypeData{

	private $suit_type_data;

	public function __construct($suit_id){
		$suit_type=Suit_type::findOrfail($suit_id);
		$this->set_suit_type_data($suit_type);
	}

	private function set_suit_type_data($suit_type){
		$this->suit_type_data=$suit_type;
	}

	public function get_suit_type_data(){
		return $this->suit_type_data;
	}

	public static function get_all_suit_type($suit_types){
        $arr=[];
        foreach ($suit_types as $item) {
            $obj=new SuitTypeData($item->id);
            array_push($arr,$obj->get_suit_type_data());
        }
        return $arr;
    }

    public function get_suit_type_use_suit(){
    	return $this->suit_type_data->suits;
    }


}