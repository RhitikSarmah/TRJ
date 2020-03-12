<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;
use Session;

class SubcategoryController extends Controller
{
    public function create(){
    	$categories = Category::select('name','id')->get();
    	return view('dashboard.subcategory.create',compact('categories'));
    }
    public function store(Request $request){
         $request->validate([
            'name' => 'required',
            'image' => 'required|max:200|mimes:png,jpg,jpeg,gif'
         ]);
         $create = Subcategory::create([
            'name'=>$request->name,
             $photo = $request->file('image'),
             $name = $photo->getClientOriginalName(),
             $newname = time().$name,
             $photo->move('uploads/subcategories',$newname),
             $url = 'uploads/subcategories/'.$newname,
             'image' => $url,
         	'category_id'=>$request->category_id
         ]);
         if($create){
            Session::flash('success','new subcategory added');
         }else{
            Session::flash('error','error');
         }
         return redirect()->back();
    }
    public function view($id){
    	$subcategories = Subcategory::where('category_id',$id)->with('subcategories')->orderBy('name','desc')->get();
    	return view('dashboard.subcategory.view')->with('subcategories',$subcategories);
    }
    public function indexView($id){
        $subcategories = Subcategory::where('category_id',$id)->with('subcategories')->orderBy('name','desc')->get();
        return view('products.subcategories')->with('subcategories',$subcategories);
    }
    public function delete($id){
        $subcategories = Subcategory::find($id);
        $subcategories->delete();
        return redirect()->back();
    }
}
