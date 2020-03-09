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
	<a href="{{url()-> previous()}}"><img src="https://cdn3.iconfinder.com/data/icons/glyph/227/Cancel-512.png" width="40px"></a>
</div>
<div class="row text-center margin">
   <div class="col text-danger">
     <h3>Search Results for Products</h3>
   </div>
</div>
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
	  @foreach($searchProduct as $searchProducts)
	  <tbody>
	    <tr>
	       <th scope="row">{{$loop->iteration}}</th>
	      <td>{{$searchProducts->name}}</td>
	      <td><a href=""><img src="{{asset($searchProducts->image)}}" width="30px"></a></td>
	      <td>
	      	<form method="POST" action="{{route('product.delete',$searchProducts->id)}}">
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
