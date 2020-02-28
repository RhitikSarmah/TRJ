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
     <h3>Create New Product Category</h3>
   </div>
</div>
<div class="row justify-content-center text-danger">
  <div class="col-md-6">
    <form method="POST" action="{{route('create.category.submit')}}">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" placeholder="Category Name" name="name">
      </div>
      <button type="submit" class="btn btn-danger margin">Add Category</button>
    </form>
  </div>
</div>
@endsection