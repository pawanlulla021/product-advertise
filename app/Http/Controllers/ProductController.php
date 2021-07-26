<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\product;
use App\Models\influencer;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
//use App\Models\step;

class ProductController extends Controller
{
    

    public function userproducts_store(Request $req){
        //dd($request->all());
        if (Auth::check()) {
            
            //$lastValue = DB::table('product')->orderBy('quotation_numbe', 'desc')->first();
            $product = new product;
            $product->user_id=Auth::id();
            $product->product_name=$req->product_name;
            $product->type=$req->type;
            $product->product_address=$req->product_address;
            $product->quotation_email =$req->quotation_email ;
            $product->quotation_mobile=$req->quotation_mobile;
            $product->quotation_number=11;
            $product->save();
            return redirect()->back();
        }
        
        //$todo = auth()->user()->products()->create($request->all());
         
        
    }

    function index(){
        
        $id =DB::table('influencers')->get('id')->first();
        //dd($id);
        $influencer  = influencer::all();   
        return view('index',['influencers'=>$influencer,'ids'=> $id]);
    }
    
}
