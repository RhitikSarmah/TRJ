<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Session;

class OrderController extends Controller
{
    public function create(){
    	return view('dashboard.order.create');
    }
    public function store(Request $request){
    	$request->validate([
        'name' => 'required|max:50',
        'address' => 'required|max:100',
        'phone' => 'required|max:20',
        'email' => 'required|max:50',
        'order' => 'required|max:100',
        'details' => 'required|max:255',
        'invoice' => 'required|max:20',
        'quantity' => 'required|max:50',
        'price' => 'required|max:20'
    	]);
        $order = new Order;
        $order->name = $request->name;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->order_name = $request->order;
        $order->product = $request->details;
        $order->invoice = $request->invoice;
        $order->quantity = $request->quantity;
        $order->price = $request->price;
        $create = $order->save();
        if($create){
        	Session::flash('success','New Order Created');
        }else{
            Session::flash('error','Error');
        }
        return redirect()->back();
    }
    public function view(){
    	$order = Order::get();
    	return view('dashboard.order.view')->with('order',$order);
    }
    public function edit(Request $request,$id){
    	$order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        return redirect()->back();
    }
    public function delete($id){
    	$order = Order::find($id);
    	$order->delete();
    	return redirect()->back();
    }
    public function orderTrackingForm(){
    	return view('order.ordertracking');
    }
    public function checkMyOrder(Request $request){
    	$order = Order::where('invoice',$request->invoice)->where('phone',$request->phone)->get();
    	if(count($order) == 1){
    		return view('order.view')->with('order',$order);
    	}else{
    		return view('order.error');
    	}
    }
     public function search(Request $request){
      $search = $request->search;
      if($search != ""){
        $searchOrder = Order::where('name','LIKE','%'.$search.'%')->get();
        if(count($searchOrder) > 0){
          return view('dashboard.order.viewsearch')->with('searchOrder',$searchOrder);
        }
      }
      return view('dashboard.error');
    }
}
