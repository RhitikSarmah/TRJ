<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Product;

class ProductController extends Controller
{
    public function create(){
    	$categories = Category::select('name','id')->get();
    	$subcategories = Subcategory::select('name','category_id','id')->get();
    	return view('dashboard.product.create')->with('categories',$categories)->with('subcategories',$subcategories);
    }
    public function store(Request $request){
        $product = new Product;
    	$product->name = $request->name;
    	$photo = $request->image;
    	$name = $photo->getClientOriginalName();
    	$newname = time().$name;
    	$photo->move('uploads/products',$newname);
    	$url = 'uploads/products/'.$newname;
    	$product->image = $url;
    	$product->category_id = $request->category_id;
    	$product->subcategory_id = $request->subcategory_id;
    	$product->save();
    	return redirect()->back();
    }
    public function view($id){
    	$products = Product::where('subcategory_id',$id)->with('products')->orderBy('name','desc')->get();
    	return view('dashboard.product.view')->with('products',$products);
    }
    public function delete($id){
    	$products = Product::find($id);
    	$products->delete();
    	return redirect()->back();
    }
}
