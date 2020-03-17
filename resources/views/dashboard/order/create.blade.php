@extends('dashboard.dashboardlayout')
@section('content')
<style type="text/css">
  .margin{
    margin-top: 30px;
    margin-bottom: 30px;
  }
</style>
<div class="row justify-content-center margin">
   <div class="col-md-6 text-danger">
     <h3>Create New Order</h3>
   </div>
</div>
<div class="row justify-content-center text-danger">
  <div class="col-md-6">
    <form method="POST" action="{{route('order.store')}}" enctype="multipart/form-data">
      @csrf
      @if(Session::has('success'))
       <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      <div class="form-group">
        <label for="exampleInputEmail1">Customer Name</label>
        <input type="text" class="form-control" placeholder="Customer Name" name="name">
        <small>{{$errors->first('name')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" placeholder="Address" name="address">
        <small>{{$errors->first('address')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" class="form-control" placeholder="Phone Number" name="phone">
        <small>{{$errors->first('phone')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email">
        <small>{{$errors->first('email')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Order Name</label>
        <input type="text" class="form-control" placeholder="Order Name" name="order">
        <small>{{$errors->first('order')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Product Details</label>
        <input type="text" class="form-control" placeholder="Product Details" name="details">
        <small>{{$errors->first('details')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Invoice Number</label>
        <input type="text" class="form-control" placeholder="Invoice Number" name="invoice">
        <small>{{$errors->first('invoice')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Quantity</label>
        <input type="text" class="form-control" placeholder="Product Quantity" name="quantity">
        <small>{{$errors->first('quantity')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="text" class="form-control" placeholder="Price In Rs" name="price">
        <small>{{$errors->first('price')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Expected date of delivery</label>
        <input type="date" class="form-control" placeholder="The date of expected delivery" name="deliverydate">
        <small>{{$errors->first('deliverydate')}}</small>
      </div>
      <button type="submit" class="btn btn-danger margin">Create Order</button>
    </form>
  </div>
</div>
@endsection