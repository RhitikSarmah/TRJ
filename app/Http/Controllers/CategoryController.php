<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{   public function createCategory(){
	    return view('dashboard.createcategories');
}
    public function submitCategory(Request $request){
    	$category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect()->back();
    }
    public function viewCategory(){
    	$category = Category::orderBy('id','desc')->get();
    	return view('dashboard.viewcategories')->with('category',$category);
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
