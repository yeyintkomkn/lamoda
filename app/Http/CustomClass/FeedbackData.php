<?php

namespace App\Http\CustomClass;
use App\Feedback;

class FeedbackData{

	private $feedback_data;

	public function __construct($feedback_id){
		$feedback=feedback::findOrfail($feedback_id);
		$this->set_feedback_data($feedback);
	}

	private function set_feedback_data($feedback){
		$this->feedback_data['feedback']=$feedback->feedback_type;
		$this->feedback_data=$feedback;
	}

	public function get_feedback_data(){
        // $this->feedback_data['feedback_type_name']=$this->feedback_data->feedback_type->name;
		$this->feedback_data['photo_url']=Photo::$domail_url."img/feedback_photo/".$this->feedback_data->photo;
		return $this->feedback_data;
	}

	public static function get_all_feedback($feedback_arr){
//		$feedback_arr=Feedback::all();
	    $arr=[];
	    foreach($feedback_arr as $data){
	        $obj=new feedbackData($data->id);
	        array_push($arr,$obj->get_feedback_data());
        }
        return $arr;
    }

 //    public static function suggest_feedbacks($feedback_id){
	//     $obj=new feedbackData($feedback_id);
	//     $feedback_type_id=$obj->get_feedback_data()['feedback_type_id'];

	//     $feedback=feedback::where('feedback_type_id',$feedback_type_id)->inRandomOrder()->take(3)->get();
	//     $suggest_feedback_arr=feedbackData::feedback_data($feedback);
	//     return $suggest_feedback_arr;
 //    }

}