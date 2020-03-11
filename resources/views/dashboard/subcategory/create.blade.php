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
     <h3>Create New Product Sub Category</h3>
   </div>
</div>
<div class="row justify-content-center text-danger">
  <div class="col-md-6">
    <form method="POST" action="{{route('sub_category.store')}}" enctype="multipart/form-data">
      @csrf
      @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      <div class="form-group">
        <label for="exampleInputEmail1">Select Category</label>
          <select class="form-control" name="category_id">
            @foreach($categories as $category)
             <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" placeholder="Subcategory Name" name="name">
        <small>{{$errors->first('name')}}</small>
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" name="image">
        <small>{{$errors->first('name')}}</small>
      </div>
      <button type="submit" class="btn btn-danger margin">Add Subcategory</button>
    </form>
  </div>
</div>
@endsection