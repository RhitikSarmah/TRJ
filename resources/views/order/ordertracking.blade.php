<form method="POST" action="{{route('check.my.order')}}">
	@csrf
	<div class="form-group">
    <label for="exampleInputEmail1">Invoice Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="invoice">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
  </div>
  <button type="submit" class="btn">Check My Order</button>
</form>