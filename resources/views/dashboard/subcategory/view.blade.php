@extends('dashboard.dashboardlayout')
@section('content')
<div class="row">
<div class="container">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Serial No.</th>
	      <th scope="col">Subcategories</th>
	    </tr>
	  </thead>
	  @foreach($subcategories as $subcategory)
	  <tbody>
	    <tr>
	      <th scope="row">{{$loop->iteration}}</th>
	      <td><a href="{{route('product.view',$subcategory->id)}}">{{$subcategory->name}}</a></td>
	      <td>
	      	<form method="POST" action="{{route('sub_category.delete',$subcategory->id)}}">
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
