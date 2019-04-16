<?php

namespace App\Http\CustomClass;
use App\Suit;

class SuitData{

	private $suit_data;

	public function __construct($suit_id){
		$suit=Suit::findOrfail($suit_id);
		$this->set_suit_data($suit);
	}

	private function set_suit_data($suit){
		$this->suit_data['suit']=$suit->suit_type;
		$this->suit_data=$suit;
	}

	public function get_suit_data(){
        $this->suit_data['suit_type_name']=$this->suit_data->suit_type->name;
		$this->suit_data['photo_url']=Photo::$domail_url."img/suit_photo/".$this->suit_data->photo;
		return $this->suit_data;
	}

	public static function suit_data($suit_arr){
	    $arr=[];
	    foreach($suit_arr as $data){
	        $obj=new SuitData($data->id);
	        array_push($arr,$obj->get_suit_data());
        }
        return $arr;
    }

    public static function suggest_suits($suit_id){
	    $obj=new SuitData($suit_id);
	    $suit_type_id=$obj->get_suit_data()['suit_type_id'];

	    $suit=Suit::where('suit_type_id',$suit_type_id)->inRandomOrder()->take(3)->get();
	    $suggest_suit_arr=SuitData::suit_data($suit);
	    return $suggest_suit_arr;
    }

}