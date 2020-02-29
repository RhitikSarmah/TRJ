<form method="POST" action="{{route('check.my.order')}}">
	<div class="form-group">
    <label for="exampleInputEmail1">Invoice Number</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="invoice">
  </div>
  <button type="submit" class="btn">Check My Order</button>
</form>