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
	@if($orders->status == "SHIPPING")
	    <div>Hiii</div>
	@elseif($orders->status == "DELIVERED")
	     <div>Hello</div>
    @endif
</div>
@endforeach