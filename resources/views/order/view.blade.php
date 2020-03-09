@foreach($order as $key=>$orders)
<div>
	{{$orders->id}}
	{{$orders->order_name}}
	{{$orders->invoice}}
	{{$orders->name}}
	{{$orders->address}}
	{{$orders->phone}}
	{{$orders->email}}
	{{$orders->product}}
	{{$orders->quantity}}
	{{$orders->price}}
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