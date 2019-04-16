<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\CustomClass\SiteData;
use App\Site_information;
use App\Feedback;
use App\Http\CustomClass\FeedbackData;
use App\Suit_type;
use App\Http\CustomClass\SuitTypeData;
use App\Accessory;
use App\Http\CustomClass\AccessoryData;
use App\WaistCoat;
use App\Http\CustomClass\WaistCoatData;
use App\Product;
use App\Http\CustomClass\ProductData;
use App\Http\Requests\feedbackValidate;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('feedback_store');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site_admin.dashboard');
    }

    public function site_information(){
        return view('site_admin.site_information');
    }

    public function site_information_data(){
//        $user_id=Auth::id();
        $obj=new SiteData();
        $site_data=$obj->get_site_data();
        return response()->json($site_data);
    }

    public function site_information_update(Request $request){
        $site_information_update=Site_information::find(1);
        $site_information_update->name=$request->get('name');
        $site_information_update->email=$request->get('email');
        $site_information_update->phone1=json_encode($request->get('phone1'));
        $site_information_update->phone2=$phone_two_arr=json_encode($request->get('phone2'));
        $site_information_update->address1=$address_one_arr=$request->get('address1');
        $site_information_update->address2=$address_two_arr=$request->get('address2');
        $site_information_update->about_us=$request->get('about_us');
        $site_information_update->facebook_url=$request->get('facebook_url');

        $site_information_update->update();

        return "true";
    }

    public function feedback(){
        return view('site_admin.feedback');
    }

    public function feedback_store(feedbackValidate $request){
        $date=$request->get('date');
        if(isset($date)){
            $photo=$request->file('photo');
            $photo_ori_name=$photo->getClientOriginalName();
            $photo_name=time().'_'.$photo_ori_name;
            $photo->move(public_path('img/feedback_photo'),$photo_name);
            $name=$request->get('name');
            $position=$request->get('position');
            $description=$request->get('description');
            $rating=$request->get('rating');
            Feedback::create([
                'name'=>$name,
                'photo'=>$photo_name,
                'position'=>$position,
                'description'=>$description,
                'rating'=>$rating,
                'date'=>$date
            ]);

            return "true";
        }else{
            $photo=$request->file('photo');
            $photo_ori_name=$photo->getClientOriginalName();
            $photo_name=time().'_'.$photo_ori_name;
            $photo->move(public_path('img/feedback_photo'),$photo_name);
            $name=$request->get('name');
            $position=$request->get('position');
            $description=$request->get('description');
            $rating=$request->get('rating');
            date_default_timezone_set("Asia/Yangon");
            Feedback::create([
                'name'=>$name,
                'photo'=>$photo_name,
                'position'=>$position,
                'description'=>$description,
                'rating'=>$rating,
                'date'=>date('m/d/Y')
            ]);

            return redirect('/customer_feedback');
        }
       
    }   

    public function feedback_data(){
        $feedback=Feedback::orderBy('id', 'DESC')->get();
        $feedback_arr=array();
        foreach($feedback as $feedback_single){
            $feedback_id=$feedback_single->id;
            $obj=new FeedbackData($feedback_id);
            array_push($feedback_arr,$obj->get_feedback_data());
        }
        return response()->json(['data'=>$feedback_arr]);
    }

    public function feedback_edit($id){
        $obj=new FeedbackData($id);
        $data=$obj->get_feedback_data();
        return response()->json($data);
    }

    public function feedback_update(Request $request){
        $id=$request->get('id');
        $update_feedback=Feedback::where('id',$id)->first();
        $photo=$request->file('photo');
        if(isset($photo)){
            if(file_exists(public_path('img/feedback_photo/'.$update_feedback->photo))){
            unlink(public_path('img/feedback_photo/'.$update_feedback->photo));
            }
            $photo_ori_name=$photo->getClientOriginalName();
            $photo_name=time().'_'.$photo_ori_name;
            $photo->move(public_path('img/feedback_photo'),$photo_name);
            $update_feedback->photo=$photo_name;
        }
        $update_feedback->name=$request->get('name');
        $update_feedback->position=$request->get('position');
        $update_feedback->description=$request->get('description');
        $update_feedback->date=$request->get('date');
        $update_feedback->update();

        return "true";
        
    }

    public function feedback_destroy($id){
        $obj=new FeedbackData($id);
        $delete_feedback=$obj->get_feedback_data();
         if(file_exists(public_path('img/feedback_photo/'.$delete_feedback->photo))){
            unlink(public_path('img/feedback_photo/'.$delete_feedback->photo));
        }
        $delete_feedback->delete();
        return "true";
    }

    public function all_type(){
        $suit_type_arr=array();
        $acc_type_arr=array();
        $waist_coat_arr=array();
        $suit_types=Suit_type::all();
        
        foreach($suit_types as $suit_type){
            $obj=new SuitTypeData($suit_type->id);
            array_push($suit_type_arr,$obj->get_suit_type_data());
        }
        $acc_types=Accessory::all();
        foreach($acc_types as $acc_type){
            $obj=new AccessoryData($acc_type->id);
            array_push($acc_type_arr,$obj->get_accesory_data());
        }  
        $waist_coats=WaistCoat::all();
        foreach($waist_coats as $waist_coat){
            $obj=new WaistCoatData($waist_coat->id);
            array_push($waist_coat_arr,$obj->get_waist_coat_data());
        }      

        return response()->json(['suit_type'=>$suit_type_arr,'acc_type'=>$acc_type_arr,'waist_coat'=>$waist_coat_arr]);
    }

    public function all_data_type(){

        $suit_type=Suit_type::all();
        $acc=Accessory::all();
        $waist_coat=WaistCoat::all();
        $product_count=Product::all();
        $count_product=count($product_count);
        $count_suit_type=count($suit_type);
        $count_acc_type=count($acc);
        $count_waist_type=count($waist_coat);
        return response()->json(['suit_count'=>$count_suit_type,'acc_count'=>$count_acc_type,'waist_count'=>$count_waist_type,'product_count'=>$count_product]);
    }

    public function product_data(){
        return view('site_admin.product_data');
    }

    public function suit_data(){
        return view('site_admin.suit_data');
    }

    public function accessory_data(){
        return view('site_admin.accessory_data');
    }

    public function waist_coat_data(){
        return view('site_admin.waist_coat_data');
    }
}
