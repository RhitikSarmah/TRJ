<?php

namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Http\Request;
use Session;

class CarouselController extends Controller
{   public function indexCarousel(){
        $carousel = Carousel::orderBy('id','desc')->get();
        return view('welcome')->with('carousel',$carousel);
    }
    public function carousel(){
    	return view('dashboard.carousel');
    }
    public function submitCarousel(Request $request){
    	$request->validate([
         'name' => 'required|max:255',
         'image' => 'required|max:300|mimes:jpg,png,jpeg'
    	]);
    	$carousel = new Carousel;
    	$carousel->name = $request->name;
    	$photo = $request->image;
    	$name = $photo->getClientOriginalName();
    	$newname = time().$name;
    	$photo->move('uploads/carousel',$newname);
    	$url = 'uploads/carousel/'.$newname;
    	$carousel->image = $url;
    	$create = $carousel->save();
    	if($create){
    		Session::flash('success','upload successful');
    	}else{
    		Session::flash('error','Error Found');
    	}
        return redirect()->back();
    }
    public function viewCarousel(){
    	$carousel = Carousel::orderBy('id','desc')->get();
    	return view('dashboard.viewoffers')->with('carousel',$carousel);
    }
    public function delCarousel($id){
    	$carousel = Carousel::find($id);
    	$carousel->delete();
    	return redirect()->back();
    }
}
