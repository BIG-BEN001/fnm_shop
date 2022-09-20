<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Order_master;
use App\Models\Order_item;
use App\Models\Country;
use App\Models\Shipping;
use Cart;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use URL;
use Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ipay()
    {
        return view('ipay');
    }

    public function ipay_post(Request $request)
    {
        // return view('ipay');
        // dd($request->all());

        $res = array();
		$gtext = gtext();
		$gtax = getTax();

        Session::forget('pt_payment_error');

        $this->validate($request,[
            'email'=>'required|email',
            'phone'=>'required',
            'city'=>'required',
            'shipping_method'=>'required',
         ]);
        $generated_hash = "";
		$fields = array();
        $i = 1;
        $random_code = random_int(100000, 999999);
		$order_no = 'ORD-'.$random_code.$i;

			$fields = array(
				"live"=> "0",
				"oid"=> "demo1",
				"inv"=> "123456789",
				"ttl"=> "1",
				"tel"=> "$request->phone",
				"eml"=> "$request->email",
				"vid"=> "fnmbrand",
				"curr"=> "KES",
				"p1"=> '',
				"p2"=> "",
				"p3"=> "",
				"p4"=> "",                        
				"cbk"=> "http://shop.fikasystems.com/ipay_callback",     
				"cst"=> "1",
				"crl"=> "2",
				"autopay" => "0"           
						
			);

			$datastring =  $fields['live'].$fields['oid'].$fields['inv'].$fields['ttl'].$fields['tel'].$fields['eml'].$fields['vid'].$fields['curr'].$fields['p1'].$fields['p2'].$fields['p3'].$fields['p4'].$fields['cbk'].$fields['cst'].$fields['crl'];
			$hashkey ='rwn9Pgzu*N7%A2s$AM?#V2GfbfQUMVsk';//use "demoCHANGED" for testing where vid is set to "demo"
			$generated_hash = hash_hmac('sha1',$datastring , $hashkey);
            return Redirect::to("https://payments.ipayafrica.com/v3/ke?live={$fields['live']}&oid={$fields['oid']}&inv={$fields['inv']}&ttl={$fields['ttl']}&tel={$fields['tel']}&eml={$fields['eml']}&vid={$fields['vid']}&curr={$fields['curr']}&p1={$fields['p1']}&p2={$fields['p2']}&p3={$fields['p3']}&p4={$fields['p4']}&cbk={$fields['cbk']}&cst={$fields['cst']}&crl={$fields['crl']}&hsh={$generated_hash}&autopay={$fields['autopay']}");
			// header("Location:https://payments.ipayafrica.com/v3/ke?live={$fields['live']}&oid={$fields['oid']}&inv={$fields['inv']}&ttl={$fields['ttl']}&tel={$fields['tel']}&eml={$fields['eml']}&vid={$fields['vid']}&curr={$fields['curr']}&p1={$fields['p1']}&p2={$fields['p2']}&p3={$fields['p3']}&p4={$fields['p4']}&cbk={$fields['cbk']}&cst={$fields['cst']}&crl={$fields['crl']}&hsh={$generated_hash}&autopay={$fields['autopay']}");
		

		
    }

    public function ipay_callback(Request $request)
    {
        // dd($request->all());
        // return view('ipay');
        return Redirect::to('/thank');
    }

    public function about()
    {
        return view('frontend.about');
    }
	
    public function notFoundPage()
    {
        return view('backend.notfound');
    }	

    public function pesatel(){
		return view('frontend.pesatel');
	}
}
