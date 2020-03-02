@extends('dashboard.dashboardlayout')
@section('content')
<style type="text/css">
  .margin{
    margin-top: 30px;
    margin-bottom: 30px;
  }
</style>
<div class="row text-center margin">
   <div class="col text-danger">
     <h3>Orders</h3>
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
	  @foreach($order as $orders)
	  <tbody>
	    <tr>
	      <td><a>{{$loop->iteration}}.</a></td>
	      <td><a>{{$orders->name}}</a></td>
	      <td><a>{{$orders->address}}</a></td>
	      <td><a>{{$orders->phone}}</a></td>
	      <td><a>{{$orders->order_name}}</a></td>
	      <td><a>{{$orders->product}}</a></td>
	      <td><a>{{$orders->quantity}}</a></td>
	      <td><a>{{$orders->price}}</a></td>
	      <td><a>{{$orders->invoice}}</a></td>
	      <td><a>{{$orders->created_at}}</a></td>
	      <td><a>{{$orders->status}}</a></td>
	      <td>
	      	  <div class="form-group">
				    <form method="POST" action="{{route('order.edit',$orders->id)}}">
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
	      	<form method="POST" action="{{route('order.delete',$orders->id)}}">
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
