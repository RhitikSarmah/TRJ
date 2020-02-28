@extends('dashboard.dashboardlayout')
@section('content')
<div class="row">
<div class="container">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Serial No.</th>
	      <th scope="col">Products</th>
	      <th scope="col">Image</th>
	    </tr>
	  </thead>
	  @foreach($products as $product)
	  <tbody>
	    <tr>
	      <th scope="row">{{$loop->iteration}}</th>
	      <td>{{$product->name}}</td>
	      <td><a href=""><img src="{{asset($product->image)}}" width="30px"></a></td>
	      <td>
	      	<form method="POST" action="{{route('product.delete',$product->id)}}">
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
