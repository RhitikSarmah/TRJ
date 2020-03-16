@extends('layout.nav')
@section('content')
@foreach($order as $key=>$orders)
<link rel="stylesheet" type="text/css" href="{{asset('css/ordertracking.css')}}">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			  <div class="text-center order-form-header">
		          <h1>Order Details</h1>
		          <p class="text-order-form text-yellow order-padding-bottom">The Details and Tracking Information of your Order</p>
			   </div>
				<table>
				  <tr>
				    <td>Name</td>
				    <td class="table-text">{{$orders->name}}</td>
				  </tr>
				  <tr>
				    <td>Email</td>
				    <td class="table-text">{{$orders->email}}</td>
				  </tr>
				  <tr>
				    <td>Phone Number</td>
				    <td class="table-text">{{$orders->phone}}</td>
				  </tr>
				  <tr>
				    <td>Invoice Number</td>
				    <td class="table-text">{{$orders->invoice}}</td>
				  </tr>
				  <tr>
				    <td>Order</td>
				    <td class="table-text">{{$orders->order_name}}</td>
				  </tr>
				  <tr>
				    <td>Product Details</td>
				    <td class="table-text">{{$orders->product}}</td>
				  </tr>
				  <tr>
				    <td>Quantity</td>
				    <td class="table-text">{{$orders->quantity}}</td>
				  </tr>
				  <tr>
				    <td>Price</td>
				    <td class="table-text">{{$orders->price}}</td>
				  </tr>
				  <tr>
				    <td>Address</td>
				    <td class="table-text">{{$orders->address}}</td>
				  </tr>
				</table>
		</div>
	</div>
</div>

<div>
	@if($orders->status == "ORDERED")
	     <div style="font-size: 30px; font-weight: 600;"><span style="color: green; font-size: 30px; font-weight: 600;">ordered></span>in making>dispatched>shipment>arrived>delivered</div>
	@elseif($orders->status == "MAKING")
	     <div style="font-size: 30px; font-weight: 600;"><span style="color: green; font-size: 30px; font-weight: 600;">ordered>in making></span>dispatched>shipment>arrived>delivered</div>
	@elseif($orders->status == "DISPATCHED")
	     <div style="font-size: 30px; font-weight: 600;"><span style="color: green; font-size: 30px; font-weight: 600;">ordered>in making>dispatched></span>shipment>arrived>delivered</div>
	@elseif($orders->status == "SHIPMENT")
	     <div style="font-size: 30px; font-weight: 600;"><span style="color: green; font-size: 30px; font-weight: 600;">ordered>in making>dispatched>shipment></span>arrived>delivered</div>
	@elseif($orders->status == "ARRIVED")
	     <div style="font-size: 30px; font-weight: 600;"><span style="color: green; font-size: 30px; font-weight: 600;">ordered>in making>dispatched>shipment>arrived></span>delivered</div>
	@elseif($orders->status == "DELIVERED")
	     <div style="color:green; font-size: 30px; font-weight: 600;">ordered>in making>dispatched>shipment>arrived>delivered</div>
    @endif
</div>
@endforeach
@endsection