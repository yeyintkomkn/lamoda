<?php

namespace App\Http\CustomClass;
use App\Product;
use App\Suit_type;

class ProductData{

	private $product_data;

	public function __construct($product_id){
		$product=Product::findOrfail($product_id);
		$this->set_product_data($product);
	}

	private function set_product_data($product){
		$this->product_data['product']=$product->product_type;
		$this->product_data=$product;
	}

	public function get_product_data(){
		if($this->product_data->product_type == 'suit'){
			$this->product_data['type']=$this->product_data->suit_type;
		}
		if($this->product_data->product_type == 'accessory'){
			$this->product_data['type']=$this->product_data->acc_type;
		}
		if($this->product_data->product_type == 'waist_coat'){
			$this->product_data['type']=$this->product_data->waist_coat;
		}
		$this->product_data['photo_url']=Photo::$domail_url."img/product_photo/".$this->product_data->photo;
		return $this->product_data;
	}

	public static function suggest_products($product_id,$count){
	    $obj=new ProductData($product_id);
	    $product_type_id=$obj->get_product_data()['type']['id'];

		$products=Product::where('data_id',$product_type_id)->inRandomOrder()->take($count)->get();
		$suggest_product_arr=ProductData::get_product($products);
	    return $suggest_product_arr;
    }


	public static function get_product($input_data){
		$arr=[];
        foreach($input_data as $data){
            $obj=new ProductData($data->id);
            array_push($arr,$obj->get_product_data());
		}
		return $arr;
	}
	
	public static function get_all_product_type(){
		$suit_type=Suit_type::all();
		$suit_type_arr=SuitTypeData::get_all_suit_type($suit_type);
		
		$accessories=AccessoryData::get_all_accesories();

		$waistcoattype=WaistCoatData::get_all_waistcoate_type();
		
		$arr=[
		    'suit_type'=>$suit_type_arr,
            'accessories_type'=>$accessories,
            'waistcoat_type'=>$waistcoattype
        ];

		return $arr;
	}



}