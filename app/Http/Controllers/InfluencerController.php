<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\influencer;
use App\Models\product;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InfluencerController extends Controller
{

    function login(Request $req)
    {
      $user = Admin::where(['email' => $req->email])->first();
      if(!$user || !Hash::check($req->password,$user->password)){
          return "Username or password is incorrect";
      }
      else{
          $req->session()->put('user',$user);
          return redirect('/admin/home');
      }
    }
    function addproduct(Request $req)
    {     
        //dd($req); 
      if($req->session()->has('user')){     
        
        $product=$req->file('img_src');
        $reIamge=time().'.'.$product->getClientOriginalExtension();
        $dest=public_path('/influencerimagesbyadmin');
        $product->move($dest,$reIamge);

        $influencer = new influencer;
        $influencer->influencer_name=$req->influencer_name;
        $influencer->influencer_location=$req->influencer_location;
        $influencer->instagram_link	=$req->instagram_link;
        $influencer->facebook_link=$req->facebook_link;
        $influencer->youtube_link=$req->youtube_link;
        
        $influencer->influencer_picture	=$reIamge;
        $influencer->influencer_email=$req->influencer_email;
        $influencer->influencer_mobile=$req->influencer_mobile;
                        
        $influencer->save();
        return redirect('/admin/add_product');
      }
      else{
       return redirect('/admin/login');
      }  
    }

    public function viewaddedinfluencer()
    {
        $todos = influencer::all();
        return view('admin.viewall',compact('todos'));
        //return view('admin.viewall');
    }
    public function viewwantquotationusers()
    {
        $todos = product::all();
        return view('admin.order',compact('todos'));
        //return view('admin.viewall');
    }

    function viewregisteredusers(){
      $todos = User::all();
        return view('admin.registereduser',compact('todos'));  
    }

    public function homepage(){

        $count_products =DB::table('products')->count('id');
        //dd($count_products);

        $count_users =DB::table('users')->count('id');
        //dd($count_users);

        $count_orders =DB::table('influencers')->count('id');
        //dd($count_orders);
        return view('admin/home',['count_products'=>$count_products,'count_users'=> $count_users,'count_orders'=> $count_orders]);
        //return view('admin/home');
    }

    public function edit(influencer $todo,$id){
        $todo = influencer::find($id);
        return view('admin.edit',compact('todo'));
    }

    public function update(Request $req,$id)
    {
      if($req->session()->has('user')){        
        $product=$req->file('img_src');
        $reIamge=time().'.'.$product->getClientOriginalExtension();
        $dest=public_path('/influencerimagesbyadmin');
        $product->move($dest,$reIamge);

        influencer ::where('id', $id)->update(['influencer_name'=> $req->influencer_name,'influencer_location'=> $req->influencer_location,'instagram_link' => $req->instagram_link,'facebook_link'=> $req->facebook_link,'youtube_link'=> $req->youtube_link,'influencer_picture'=> $reIamge,'influencer_email'=> $req->influencer_email,'influencer_mobile'=> $req->influencer_mobile]);
        return redirect('/admin/view_product');
      }
      else{
       return redirect('/admin/login');
      } 
    }

    function destroy(Request $req,$id)
    {
      if($req->session()->has('user')){
        influencer::where('id',$id)->delete();
        return redirect()->back();
      }
      else{
        return redirect('/admin/login');
      } 
    }

}
