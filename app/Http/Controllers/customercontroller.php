<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class customercontroller extends Controller
// insert the sand database
{
    public function index()
    {

        // $url =url('/customer');
        // $edit =campact('url')->with($edit);
   
        return view('CustomerF');
    }
    // the store function in database query 
    public function store(Request $request)
    {
   
        echo "(pre)";
        print_r($request->all());

        $Cust=new Customer;
        $Cust->username=$request['username'];
        $Cust->email=$request['email'];
        $Cust->Password=md5 ($request['Password']);
        $Cust->save();
        return redirect('/customer/view');
    }
    // the data Seclect database  function query 
    public function select(Request $request)
    {
   $search = $request['search'] ?? "";
   if($search !=""){
    //    /where seach  
//   same varibale   show
 $show=Customer::where('username','=' ,$search)->get(); 
   }else{
       //   same varibale  show
    $show=Customer::paginate(4); 
    // $show=Customer::all(); 
   }
       
    
        return View('customertable')->with(compact('show','search'));
        // datafecthing in this code
        // return view('customertable',compact('show'));
    }
    // delete query code
    public function delete($id){

Customer::find($id)->delete();
return redirect()->back();
    }
   
 // End delete query
    // this function edit  
    public function edit($id){

       $Cust = Customer::find($id);
       return View('edit_page')->with(compact('Cust'));
    // return redirect('edit_page');
   
    
    // return view('edit_page',campact('$Cust'));
 


            }
             // update  function query 

            public function update (Request $request,$id)
            {
           
                // echo "(pre)";
                // print_r($request->all());
       
               $Cust = Customer::find($id);
                $Cust->username=$request['username'];
                $Cust->email=$request['email'];
                $Cust->Password=md5 ($request['Password']);
                $Cust->update();
              
                return redirect('/customer/view');
            }

            
            
}
