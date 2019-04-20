<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use App\Teacher;
class TestController extends Controller
{
    // 
    public function Showview(){
         $student =new Teacher;
        $student->name ="Junaid";
        $student->save();
        $subjects=['Mathc','Physics','Chemistry'];
        $marks=['100','67','86'];
        return view('hello')->with(['mysub'=>$subjects,'mymark'=>$marks]);
        // return view('hello')->withmysub($subjects)->withmymark($marks);
    }
}
