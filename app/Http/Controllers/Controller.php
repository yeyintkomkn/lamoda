<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Feedback;
use App\Order;
use App\Site_information;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\CustomClass\ProductData;
use App\Product;
use App\Http\CustomClass\FeedbackData;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function show_home_page(){
        $product_type=ProductData::get_all_product_type();
        $site_profile=Site_information::find(1);

        $suit=Product::where('product_type','suit')->inRandomOrder()->take(8)->get();
        $suit_arr=ProductData::get_product($suit);

        $waistcoat=Product::where('product_type','waist_coat')->inRandomOrder()->take(8)->get();
        $waistcoat_arr=ProductData::get_product($waistcoat);

        $blazers=Product::where('product_type','accessory')->where('data_id','1')->inRandomOrder()->take(8)->get();//data_id 1 is blazers
        $blazers_arr=ProductData::get_product($blazers);

        $shirts=Product::where('product_type','accessory')->where('data_id','2')->inRandomOrder()->take(8)->get();//data_id 1 is blazers
        $shirts_arr=ProductData::get_product($shirts);

        $pants=Product::where('product_type','accessory')->where('data_id','3')->inRandomOrder()->take(8)->get();//data_id 1 is blazers
        $pants_arr=ProductData::get_product($pants);

//        $blets=Product::where('product_type','accessory')->where('data_id','4')->inRandomOrder()->take(8)->get();//data_id 1 is blazers
//        $blets_arr=ProductData::get_product($blets);

        $shoes=Product::where('product_type','accessory')->where('data_id','5')->inRandomOrder()->take(8)->get();//data_id 1 is blazers
        $shoes_arr=ProductData::get_product($shoes);

        $skirt_and_blouse=Product::where('product_type','accessory')->where('data_id','11')->inRandomOrder()->take(8)->get();//data_id 1 is blazers
        $skirt_and_blouse_arr=ProductData::get_product($skirt_and_blouse);
        
//        $accessory=Product::where('product_type','accessory')->inRandomOrder()->take(8)->get();
        $accessory=DB::select('select products.* 
                                from products,accessories
                                where products.product_type="accessory"
                                and products.data_id=accessories.id
                                and accessories.level=0
                                limit 8');
        $accessory_arr=ProductData::get_product($accessory);

        $feedbacks=Feedback::all();
        $feedback_arr=FeedbackData::get_all_feedback($feedbacks);
        // return $product_type;
        return view('user.home')->with([
            'product_type'=>$product_type,
            'site_profile'=>$site_profile,
            'feedbacks'=>$feedback_arr,
            'page_url'=>"home",

            'suits'=>$suit_arr,
            'waistcoats'=>$waistcoat_arr,
            'blazers'=>$blazers_arr,
            'shirts'=>$shirts_arr,
            'pants'=>$pants_arr,
            'skirt_and_blouse'=>$skirt_and_blouse_arr,
            'shoes'=>$shoes_arr,
            'accessories'=>$accessory_arr,

        ]);
//        return json_encode($accessory_arr);
    }


    // function show_all_product(){
    //     $suit_type=Suit_type::all();
    //     $suit_type_arr=SuitTypeData::get_all_suit_type($suit_type);
    //     $site_profile=Site_information::find(1);

    //     $latest_suit=Suit::orderBy('id','desc')->get()->take(3);
    //     $latest_suit_arr=SuitData::suit_data($latest_suit);

    //     $suit=Suit::orderBy('id','desc')->paginate(9);
    //     $suit_arr=SuitData::suit_data($suit);

    //     return view('user.suits')->with([
    //         'suit_types'=>$suit_type_arr,
    //         'suits'=>$suit_arr,
    //         'latest_suit'=>$latest_suit_arr,
    //         'site_profile'=>$site_profile,
    //         'paginate'=>$suit
    //     ]);
    // }


    function show_products($req_product_type,$data_id){
        if ($req_product_type=="suit") {
           $products=Product::where('product_type','suit')->where('data_id',$data_id)->paginate(9);
        }
        else if ($req_product_type=="accessory") {
            $products=Product::where('product_type','accessory')->where('data_id',$data_id)->paginate(9);
        }
        else if ($req_product_type=="waistcoat") {
            $products=Product::where('product_type','waist_coat')->where('data_id',$data_id)->paginate(9);
        }
        else{
            return redirect('/');
        }

        $product_arr=ProductData::get_product($products);

        $latest_product=Product::orderBy('id','desc')->get()->take(3);
        $latest_product_arr=ProductData::get_product($latest_product);

        $product_type=ProductData::get_all_product_type();
        $site_profile=Site_information::find(1);

        return view('user.suits')->with([
            'product_type'=>$product_type,
            'site_profile'=>$site_profile,
            'page_url'=>"product",

            'products'=>$product_arr,
            'latest_products'=>$latest_product_arr,
            'paginate'=>$products
        ]);
        // return $product_arr;
    }

    // function search_product(Request $request){
    //     $keyword=$request->get('search');

    //     $latest_product=Product::orderBy('id','desc')->get()->take(3);
    //     $latest_product_arr=ProductData::get_product($latest_product);

    //     $product_type=ProductData::get_all_product_type();
    //     $site_profile=Site_information::find(1);

    //     $suit=Suit::where('detail', 'like', '%' . $keyword . '%')->paginate(9);
    //     $suit_arr=SuitData::suit_data($suit);


    //     return view('user.suits')->with([
    //         'suit_types'=>$suit_type_arr,
    //         'suits'=>$suit_arr,
    //         'latest_suit'=>$latest_suit_arr,
    //         'site_profile'=>$site_profile,
    //         'paginate'=>$suit
    //     ]);

    // }

    function show_product_detail($id){
        $product_type=ProductData::get_all_product_type();
        $site_profile=Site_information::find(1);

        $product=new ProductData($id);
        $product_detail=$product->get_product_data();

        $suggest_product=ProductData::suggest_products($id,3);

        // return $suggest_product;
        return view('user.product_detail')->with([
            'product_type'=>$product_type,
            'site_profile'=>$site_profile,
            'page_url'=>"product",
            'product_detail'=>$product_detail,
            'suggest_product'=>$suggest_product
        ]);
    }

    function contact(){
        $product_type=ProductData::get_all_product_type();
        $site_profile=Site_information::find(1);

        return view('user.contact')->with([
            'product_type'=>$product_type,
            'site_profile'=>$site_profile,
            'page_url'=>"contact"
        ]);
    }
    function store_contact(Request $request){
//        return $request->all();
        Contact::create($request->all());
        return redirect('/contact')->with(['success_msg'=>'Submitting Success! We will Contact You']);
    }
    function about(){
        $product_type=ProductData::get_all_product_type();
        $site_profile=Site_information::find(1);


        return view('user.about')->with([
            'product_type'=>$product_type,
            'site_profile'=>$site_profile,
            'page_url'=>"about"
        ]);
    }

    function services(){
        $product_type=ProductData::get_all_product_type();
        $site_profile=Site_information::find(1);

        return view('user.services')->with([
            'product_type'=>$product_type,
            'site_profile'=>$site_profile,
            'page_url'=>"service"
        ]);
    }
    function feedback(){
        $product_type=ProductData::get_all_product_type();
        $site_profile=Site_information::find(1);
        $feedbacks=Feedback::orderBy('id','desc')->paginate(5);
        $feedback_arr=FeedbackData::get_all_feedback($feedbacks);
        return view('user.feedback')->with([
            'product_type'=>$product_type,
            'site_profile'=>$site_profile,
            'feedbacks'=>$feedback_arr,
            'paginate'=>$feedbacks,
            'page_url'=>"feedback"
        ]);
//        return json_encode($feedbacks);
    }

    function order(){
        $product_type=ProductData::get_all_product_type();
        $site_profile=Site_information::find(1);

        return view('user.order')->with([
            'product_type'=>$product_type,
            'site_profile'=>$site_profile,
            'page_url'=>"order"
        ]);
    }

    function submit_order(Request $request){
//        return $request->all();
        Order::create([
            'name'=>$request->get('name'),
            'phone'=>$request->get('phone'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'product_type'=>json_encode($request->get('product_type')),
            'order_detail'=>$request->get('order_detail'),
        ]);
        return redirect('/order')->with(['success_msg'=>'Submit Order Success!. We will contact']);
    }


    function get_all_order(){
//        $order=Order::orderBy('id','desc');
        $order=Order::orderBy('id', 'DESC')->get();
        return json_encode($order);
    }
    function get_all_contact(){
//        $order=Order::orderBy('id','desc');
        $contact=Contact::orderBy('id', 'DESC')->get();
        return json_encode($contact);
    }

    function delete_order($id){
        Order::find($id)->delete();
        return 'success delete';
    }
    function delete_contact($id){
        Contact::find($id)->delete();
        return 'success delete';
    }
}
