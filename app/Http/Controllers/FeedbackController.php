<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Session;

class FeedbackController extends Controller
{
    public function view(){
    	return view('feedback.view');
    }
    public function store(Request $request){
        $request->validate([
          'name' => 'required',
          'phone' => 'required',
          'email' => 'required',
          'feedback' => 'required'
        ]);
        $create = Feedback::create([
           'name' => $request->name,
           'phone' => $request->phone,
           'email' => $request->email,
           'query1' => $request->query1,
           'query2' => $request->query2,
           'query3' => $request->query3,
           'query4' => $request->query4,
           'query5' => $request->query5,
           'query6' => $request->query6,
           'query7' => $request->query7,
           'query8' => $request->query8,
           'query9' => $request->query9,
           'feedback' => $request->feedback
        ]);
        if($create){
            Session::flash('success','THANK YOU FOR YOUR VALUABLE FEEDBACK!');
        }else{
        	Session::flash('error','error');
        }
        return redirect()->back();
    }
    public function viewDashboard(){
    	$feedback = Feedback::orderBy('created_at','desc')->get();
    	return view('dashboard.feedback.view')->with('feedback',$feedback);
    }
}
