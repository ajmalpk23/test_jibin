<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrondendController extends Controller
{
    public function home()
    {

        return view('web.index');
    }


     // Login
     public function login()
     {
         // return view('frontend.pages.login');
         return view('web.pages.login');
     }
     public function loginSubmit(Request $request)
     {
         $data= $request->all();
         if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'status'=>'active','role'=>'user'])){
             Session::put('user',$data['email']);
             request()->session()->flash('success','Successfully login');

             return redirect()->route('home');

         }
         else{
             request()->session()->flash('error','Invalid email and password pleas try again!');
             return redirect()->back();
         }
     }

     public function logout()
     {
         Session::forget('user');
         Auth::logout();
         request()->session()->flash('success','Logout successfully');
         return back();
     }

     public function register()
     {
         // return view('frontend.pages.register');
         return view('web.pages.register');
     }

     public function registerSubmit(Request $request)
     {
         // return $request->all();
         $this->validate($request,[
             'name'=>'string|required|min:2',
             'email'=>'string|required|unique:users,email',
             'password'=>'required|min:6|confirmed',
         ]);
         $data=$request->all();
         // dd($data);
         $check=$this->create($data);
         Session::put('user',$data['email']);
         if($check){
             request()->session()->flash('success','Successfully registered');
             return redirect()->route('home');
         }
         else{
             request()->session()->flash('error','Please try again!');
             return back();
         }
     }

     public function create(array $data)
     {
         return User::create([
             'name'=>$data['name'],
             'email'=>$data['email'],
             'password'=>Hash::make($data['password']),
             'status'=>'active'
          ]);
     }
}
