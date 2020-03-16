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
	      <th scope="col">Feedback</th>
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
			  <div class="dropdown-menu" style="margin-right: 100px;">
			    <a class="dropdown-item">Staff service and assistence: {{$feedbacks->query1}}</a>
			    <a class="dropdown-item">Collection of products: {{$feedbacks->query2}}</a>
			    <a class="dropdown-item">Display and presentation of products: {{$feedbacks->query3}}</a>
			    <a class="dropdown-item">Overall experience: {{$feedbacks->query4}}</a>
			    <a class="dropdown-item">Delivery and payment: {{$feedbacks->query5}}</a>
			    <a class="dropdown-item">How you come to know about Tansukhrai Ratanlal Jewellers?: {{$feedbacks->query6}}</a>
			    <a class="dropdown-item">Did you find your requirement?: {{$feedbacks->query7}}</a>
			    <a class="dropdown-item">Would you recommend us to Friends / Relatives?: {{$feedbacks->query8}}</a>
			    <a class="dropdown-item">Do you agree to be contacted by representatives of Tansukhrai Ratanlal Jewellers?: {{$feedbacks->query9}}</a>
		  </div></td>
	      <td><a>{{$feedbacks->feedback}}</a></td>
	    </tr>
	  </tbody>
	  @endforeach
	</table>
 </div>
</div>
@endsection
