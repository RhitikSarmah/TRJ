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
	<a href="{{asset(route('order.view'))}}"><img src="https://cdn3.iconfinder.com/data/icons/glyph/227/Cancel-512.png" width="40px"></a>
</div>
<div class="row text-center margin">
   <div class="col text-danger">
     <h3>Search Results for Orders</h3>
   </div>
</div>
<div class="row">
<div class="container">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col"></th>
	      <th scope="col">Name</th>
	      <th scope="col">Address</th>
	      <th scope="col">Phone</th>
	      <th scope="col">Order</th>
	      <th scope="col">Details</th>
	      <th scope="col">Quantity</th>
	      <th scope="col">Price</th>
	      <th scope="col">Invoice</th>
	      <th scope="col">Time</th>
	      <th scope="col">Status</th>
	      <th scope="col">Update</th>
	    </tr>
	  </thead>
	  @foreach($searchOrder as $searchOrders)
	  <tbody>
	    <tr>
	      <td><a>{{$loop->iteration}}.</a></td>
	      <td><a>{{$searchOrders->name}}</a></td>
	      <td><a>{{$searchOrders->address}}</a></td>
	      <td><a>{{$searchOrders->phone}}</a></td>
	      <td><a>{{$searchOrders->order_name}}</a></td>
	      <td><a>{{$searchOrders->product}}</a></td>
	      <td><a>{{$searchOrders->quantity}}</a></td>
	      <td><a>{{$searchOrders->price}}</a></td>
	      <td><a>{{$searchOrders->invoice}}</a></td>
	      <td><a>{{$searchOrders->created_at}}</a></td>
	      <td><a>{{$searchOrders->status}}</a></td>
	      <td>
	      	  <div class="form-group">
				    <form method="POST" action="{{route('order.edit',$searchOrders->id)}}">
				    	@csrf
				    	<select class="form-control form-control-sm" id="exampleFormControlSelect1" name="status" onchange='if(this.value != 0) { this.form.submit(); }'>
				    	  <option value="0">ORDERED</option>
					      <option value="SHIPPING">SHIPPING</option>
					      <option value="OUTFORDELIVERY">OUTFORDELIVERY</option>
					      <option value="DELIVERED">DELIVERED</option>
					    </select>
				    </form>
			  </div>
	      </td>
	       <td>
	      	<form method="POST" action="{{route('order.delete',$searchOrders->id)}}">
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
