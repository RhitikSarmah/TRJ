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
<div class="row justify-content-end" style="margin-top: 10px;margin-right: 20px;">
	<a href="{{asset(route('view.enquiries'))}}"><img src="https://cdn3.iconfinder.com/data/icons/glyph/227/Cancel-512.png" width="40px"></a>
</div>
<div class="row text-center margin">
   <div class="col text-danger">
     <h3>Search Results for Enquiries</h3>
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
	  @foreach($searchEnquiry as $searchEnquiries)
	  <tbody>
	    <tr>
	      <th scope="row">{{$loop->iteration}}</th>
	      <td>{{$searchEnquiries->name}}</td>
	      <td>{{$searchEnquiries->address}}</td>
	      <td>{{$searchEnquiries->phone}}</td>
	      <td>{{$searchEnquiries->email}}</td>
	      <td>{{$searchEnquiries->enquiry}}</td>
	      <td>{{$searchEnquiries->created_at->diffForHumans()}}</td>
	      
	    </tr>
	  </tbody>
	  @endforeach
	</table>
</div>
</div>
@endsection
