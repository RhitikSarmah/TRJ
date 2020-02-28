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
     <h3>Create offer</h3>
   </div>
</div>

<div class="row justify-content-center text-danger">
  <div class="col-md-6">
    <form method="POST" action="{{asset(route('carousel.submit'))}}" enctype="multipart/form-data">
    @csrf
    @if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		    {{Session::get('success')}}
		</div>
     @endif
    	<div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" placeholder="Name of the new offer" name="name">
        <small>{{$errors->first('name')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Photo</label>
        <input type="file" class="form-control" name="image">
        <small>{{$errors->first('image')}}</small>
      </div>
      <button type="submit" class="btn btn-danger margin">Create Offer</button>
    </form>
  </div>
</div>
@endsection