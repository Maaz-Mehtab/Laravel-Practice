<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Student;
use Illuminate\Http\Request;
// use Zend\Diactoros\Request;
class Hellocontroller extends Controller{
// public function index($fname){
//     // return view('hello');
//     echo "Hello".$fname;
// }

public function index(Request $request){
    // return view('hello');
    echo $request->name;
    dd($request->all());
    // echo $request->name;
    // echo "Maaz";
}
}

?> 