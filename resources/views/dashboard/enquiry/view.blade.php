@extends('dashboard.dashboardlayout')
@section('content')
<style type="text/css">
  .margin{
    margin-top: 30px;
    margin-bottom: 30px;
  }
  .search{
  	margin-top: 10px;
  	margin-right: 20px;
  }
</style>
<div class="row justify-content-end search">
	<form class="form-inline my-2 my-lg-0" action="{{asset(route('enquiry.search'))}}">
	@csrf
	  <input class="form-control form-control-sm" name="search" placeholder="search" type="search">
	  <button class="btn btn-outline-danger btn-sm my-2 my-sm-0" type="submit">Search</button>
	</form>
</div>
<div class="row text-center margin">
   <div class="col text-danger">
     <h3>Enquiries</h3>
   </div>
</div>
<div class="row">
<div class="container">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Serial No.</th>
	      <th scope="col">Name</th>
	      <th scope="col">Address</th>
	      <th scope="col">Phone</th>
	      <th scope="col">Email</th>
	      <th scope="col">Enquiry</th>
	      <th scope="col">Time</th>
	    </tr>
	  </thead>
	  @foreach($enquiry as $enquiries)
	  <tbody>
	    <tr>
	      <th scope="row">{{$loop->iteration}}</th>
	      <td>{{$enquiries->name}}</td>
	      <td>{{$enquiries->address}}</td>
	      <td>{{$enquiries->phone}}</td>
	      <td>{{$enquiries->email}}</td>
	      <td>{{$enquiries->enquiry}}</td>
	      <td>{{$enquiries->created_at->diffForHumans()}}</td>
	      <td>
	      	<form method="POST" action="{{route('enquiry.delete',$enquiries->id)}}">
			@csrf
				<button type="submit" class="btn btn-danger" disabled onclick="return delFunction()">Delete</button>
		    </form>
	      </td>
	    </tr>
	  </tbody>
	  @endforeach
	</table>
</div>
</div>
@endsection
