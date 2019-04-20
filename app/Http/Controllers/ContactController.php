<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contact');
    }
    public function store(Request $request){
        
        $this->validate($request ,['email'=>'required|email' ]);
        // $this->validate($request ,[
        //     'email'=>'required|email' ],
        // ['email.required'=>'Enter email Address not submit the empty field',
        // 'email'=>'Plz correct the right email address '
        // ]);   
        dd($request->all()); 


    }
}
