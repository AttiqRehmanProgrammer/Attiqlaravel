<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Session;
class formcontroller extends Controller

{
    // this function is connect route get
    public function reg()
    {
    //    session code start
        Session ::put('reg','The sesion field is start');
    //  session code end
        return view('form');
       
    }
// Form data store function but form data send post mettod
    public function store(Request $request)
    {
       
      $request -> validate(
    [
   'username' =>'required',
   'email' =>'required |email',
   'password' =>'required',
   
     ]);

     

// // Form data store function end
// if($request->hasfile('image'))
// {
//     echo $request->file('image')->login('uplodes');

// }

$Cust=new Customer;
$Cust->username=$request['username'];
$Cust->email=$request['email'];
$Cust->Password=md5 ($request['Password']);
// $Cust->image=$image;
if($Cust->save())
{
echo "success";
}
else{
    echo "<h1>issuse ";
}

        
        //  print_r($request->all());   

      
    }

   
}