@extends('dashboard.dashboardlayout')
@section('content')
<div class="row">
<div class="container">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Serial No.</th>
	      <th scope="col">Categories</th>
	    </tr>
	  </thead>
	  @foreach($category as $categories)
	  <tbody>
	    <tr>
	      <th scope="row">{{$loop->iteration}}</th>
	      <td><a href="{{asset(route('sub_category.view',$categories->id))}}">{{$categories->name}}</a></td>
	      <td>
	      	<form method="POST" action="{{route('delete.category',$categories->id)}}">
			@csrf
				<button type="submit" class="btn btn-danger" onclick="return delFunction()">Delete</button>
		    </form>
	      </td>
	    </tr>
	  </tbody>
	  @endforeach
	</table>
</div>
</div>
@endsection