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

<div class="container" style="margin-top: 20px; margin-bottom: 40px;">
	<div class="row justify-content-center">
		<div class="col-md-8">
			  <div class="text-center order-form-header">
		          <h1>Tracking Details</h1>
		          <p class="text-order-form text-yellow">Expected Time of Delivery: {{$orders->deliverydate}}</p>
			   </div>
					@if($orders->status == "ORDERED")
					     <img src="{{asset('images/track1.png')}}" width="100%">
					@elseif($orders->status == "MAKING")
					     <img src="{{asset('images/track2.png')}}" width="100%">
					@elseif($orders->status == "DISPATCHED")
					     <img src="{{asset('images/track3.png')}}" width="100%">
					@elseif($orders->status == "SHIPMENT")
					     <img src="{{asset('images/track4.png')}}" width="100%">
					@elseif($orders->status == "ARRIVED")
					     <img src="{{asset('images/track5.png')}}" width="100%">
					@elseif($orders->status == "DELIVERED")
					     <img src="{{asset('images/track6.png')}}" width="100%">
				    @endif
		</div>
	</div>
</div>

@endforeach
@endsection