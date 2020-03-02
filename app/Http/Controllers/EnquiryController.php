<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;
use Session;

class EnquiryController extends Controller
{
    public function view(){
    	return view('enquiry.create');
    }
    public function store(Request $request){
        $request->validate([
          'name' => 'required|max:232',
          'address' => 'required|max:232',
          'phone' => 'required|max:15',
          'email' => 'required|max:232',
          'enquiry' => 'required|max:1000'
        ]);
        $create = Enquiry::create([
          'name' => $request->name,
          'address' => $request->address,
          'phone' => $request->phone,
          'email' => $request->email,
          'enquiry' => $request->enquiry
        ]);
        if($create){
        	Session::flash('success','Your Enquiry Has Been Submitted');
        }else{
        	Session::flash('error','error');
        }
        return redirect()->back();
    }
    public function viewEnquiries(){
    	$enquiry = Enquiry::orderBy('created_at','desc')->get();
    	return view('dashboard.enquiry.view')->with('enquiry',$enquiry);
    }
    public function delete($id){
      $enquiry = Enquiry::find($id);
      $enquiry->delete();
      return redirect()->back();
    }
}
