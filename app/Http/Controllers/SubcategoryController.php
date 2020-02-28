<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;

class SubcategoryController extends Controller
{
    public function create(){
    	$categories = Category::select('name','id')->get();
    	return view('dashboard.subcategory.create',compact('categories'));
    }
    public function store(Request $request){
         Subcategory::create([
         	'name'=>$request->name,
         	'category_id'=>$request->category_id
         ]);  
         return redirect()->back();
    }
    public function view($id){
    	$subcategories = Subcategory::where('category_id',$id)->with('subcategories')->orderBy('name','desc')->get();
    	return view('dashboard.subcategory.view')->with('subcategories',$subcategories);
    }
    public function delete($id){
        $subcategories = Subcategory::find($id);
        $subcategories->delete();
        return redirect()->back();
    }
}
