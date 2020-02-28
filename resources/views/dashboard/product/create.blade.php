@extends('dashboard.dashboardlayout')
@section('content')
<style type="text/css">
  .margin{
    margin-top: 30px;
    margin-bottom: 30px;
  }
</style>
<div class="row justify-content-center margin">
   <div class="col-md-6 text-danger">
     <h3>Add New Product</h3>
   </div>
</div>
<div class="row justify-content-center text-danger">
  <div class="col-md-6">
    <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Select Category</label>
          <select class="form-control" name="category_id">
            @foreach($categories as $category)
             <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Select Subcategory</label>
          <select class="form-control" name="subcategory_id">
            @foreach($subcategories as $subcategory)
             <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" placeholder="Product Name" name="name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input type="file" class="form-control" placeholder="Product Name" name="image">
      </div>
      <button type="submit" class="btn btn-danger margin">Add Product</button>
    </form>
  </div>
</div>
@endsection