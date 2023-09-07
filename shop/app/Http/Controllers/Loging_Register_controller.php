<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;


use App\Models\User;

class Loging_Register_controller extends Controller
{
    function logings()
    {

        return view('loging');

    }
 //auth work with user model go to model user.php
    function authloging(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


     

    //    $request->session()->get('email');


        //if u want to store ur session in one server so we use file to store it but if ur session in many servers so we want store session in db

        //auth class work with session automatically 
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            $email=$request->input('email');

            $request->session()->put('email',$email);
            return redirect()->intended('product')
                        ->withSuccess('Signed in');

                        //inteneded is go u to specific page


        // return view('loging/loging');


     }
     
     

        return redirect('loging')->withsucess('loging details are not valid');


     

   }


   function products()
   {
    return view('products');
   }

    function register()
    {
        return view('register');


    }

    function authregister(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();

        //we make new function to make every one go to the specific column
        // $check = $this->create($data);

        $check = $this->create($data);
         
        return redirect("loging")->withSuccess('You have signed-in');



    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    

    function home(Request $request)
    {



        $save_session= $request->session()->get('email');

        // var_dump(session::all());


        // $save_session= $request->session()->all();

    //   var_dump(         $request->session()->all());

        
         echo  $save_session;

        




        return view('products',['email'=> $save_session]);


    }

    function layout()
    {

        if(Auth::check()){
            return view('layout');
        }
      
            return redirect("loging")->withSuccess('You are not allowed to access');

        
  

        // return view('loging/layout');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('loging');
    }
}


