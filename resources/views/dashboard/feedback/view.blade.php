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
<div class="row text-center margin">
   <div class="col text-danger">
     <h3>Feedbacks</h3>
   </div>
</div>
<div class="row">
 <div class="container">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col"></th>
	      <th scope="col">Name</th>
	      <th scope="col">Phone</th>
	      <th scope="col">Email</th>
	      <th scope="col">Feedbacks</th>
	      <th scope="col">Purchase</th>
	      <th scope="col">References</th>
	      <th scope="col">Reason to buy from us</th>
	      <th scope="col">Complaint</th>
	    </tr>
	  </thead>
	  @foreach($feedback as $feedbacks)
	  <tbody>
	    <tr>
	      <td><a>{{$loop->iteration}}.</a></td>
	      <td><a>{{$feedbacks->name}}</a></td>
	      <td><a>{{$feedbacks->phone}}</a></td>
	      <td><a>{{$feedbacks->email}}</a></td>
	      <td><div class="btn-group">
			  <button type="button" class="btn btn-danger">Feedbacks</button>
			  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  </button>
			  <div class="dropdown-menu">
			    <a class="dropdown-item">Query1: {{$feedbacks->query1}}</a>
			    <a class="dropdown-item">Query1: {{$feedbacks->query2}}</a>
			    <a class="dropdown-item">Query1: {{$feedbacks->query3}}</a>
			    <a class="dropdown-item">Query1: {{$feedbacks->query4}}</a>
			    <a class="dropdown-item">Query1: {{$feedbacks->query5}}</a>
			    <a class="dropdown-item">Query1: {{$feedbacks->query6}}</a>
			    <a class="dropdown-item">Query1: {{$feedbacks->query7}}</a>
			    <a class="dropdown-item">Query1: {{$feedbacks->query8}}</a>
			    <a class="dropdown-item">Query1: {{$feedbacks->query9}}</a>
			    <a class="dropdown-item">Query1: {{$feedbacks->query10}}</a>
			    <a class="dropdown-item">Query1: {{$feedbacks->query11}}</a>
			    <a class="dropdown-item">Query1: {{$feedbacks->query12}}</a>
		  </div></td>
	      <td><a>{{$feedbacks->purchase}}</a></td>
	      <td><a>{{$feedbacks->ref}}</a></td>
	      <td><a>{{$feedbacks->reason}}</a></td>
	      <td><a>{{$feedbacks->complaint}}</a></td>
	    </tr>
	  </tbody>
	  @endforeach
	</table>
 </div>
</div>
@endsection
