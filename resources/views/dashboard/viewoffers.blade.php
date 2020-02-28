@extends('dashboard.dashboardlayout')
@section('content')
<div class="container">
<div class="row" >
	@foreach($carousel as $offer)
	<div class="col-md-6" style="margin-top: 20px;">
		 <img src="{{asset($offer->image)}}" height="400px">
		 <p>{{$offer->name}}</p>
		<form method="POST" action="{{route('carousel.delete',$offer->id)}}" onclick="return delFunction()">
	    @csrf
			<button type="submit" class="btn btn-danger">Delete</button>
		</form>
	</div>
	@endforeach
</div>
</div>
@endsection