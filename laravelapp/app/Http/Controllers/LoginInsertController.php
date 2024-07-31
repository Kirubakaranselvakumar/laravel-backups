<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class LoginInsertController extends Controller
{
    public function insert_form(){
        return view('insert_form');
    }

    public function login(Request $request)
    {
        $name=$request->input('username');
        $password = $request->input('password');
        $validator = Validator::make(
            $request->all(),
            [
                'name'=>'required',
                'password' => 'required|min:8|regex:/^(?=.*[0-9])(?=.*[a-zA-Z]).+$/',

            ],
            [
                 'name.required'=>'Please enter a username',
                'password.required' => 'Please enter a password.',
                'password.min' => 'The password must be at least :min characters.',
                'password.regex' => 'The password must contain at least one letter and one number.',
            ]
        );



        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
        DB::select("select * from registeration where name=? and password=?",[$name,$password] );
                    return redirect('dashboard');
        }



    }
    //     if($res>0){
    //         return redirect('/')->with('status','Login Successfull');
    //     }else{
    //         return view('insert_form')       ; }
    //     return 'Login Successfully <a href="/">Click here to go back</a>';
    //     return redirect('/');
    // }

    public function signup_form(){
        return view('signup_form');
    }

    public function signup(Request $request)
    {
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $name =$firstname.' '.$lastname;
        $dob = $request->input('dob');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $password = $request->input('password');
        DB::insert("INSERT INTO registeration(name, dob, email, mobile, password) VALUES (?, ?, ?, ?, ?)",[$name,$dob,$email,$mobile,$password]);
        return 'Record Inserted Successfully <a href="/">Click here to go back</a>';
    }

    public function mainpage(){
        return view('mainpage');
    }
}
