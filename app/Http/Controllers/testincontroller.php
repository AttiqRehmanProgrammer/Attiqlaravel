<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testincontroller extends Controller
{
    public function laravel()
    {
    
      $msg= "This Called laravel fuction echo exmple{{in this barket written}}} ";
     
      return view('child',compact('msg'));
    }
    public function message()
    {
   
      echo"This Called laravel fuction celling ";
    }
}

