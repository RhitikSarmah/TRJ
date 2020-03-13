@extends('layout.nav')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/ordertracking.css')}}">
<div class="color-blue order-form-header">
  <div class="container justify-content-center">
    <div class="row justify-content-center text-center">
      <div class="col-md-5">
           <h1 class="text-white">YOUR ORDER</h1>
           <p class="text-yellow">Login to view your order details and track your order</p>
           <form method="POST" action="{{route('check.my.order')}}">
            @csrf
            <div class="form-group">
              <label class="text-yellow">Invoice Number</label>
              <input class="order-form-input" type="text" class="form-control form-control-sm" name="invoice" style="">
            </div>
            <div class="text-yellow">
              <label for="exampleInputEmail1">Phone Number</label>
              <input class="order-form-input" type="text" class="form-control form-control-sm" name="phone">
            </div>
            <div class="d-flex justify-content-center btn-margin"><button type="submit" class="btn btn-custom text-white">CHECK MY ORDER</button></div>
         </form>
      </div>
    </div>
  </div>
</div>
<div class="feedback-form-header">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="text-center">
          <h1>FEEDBACK</h1>
          <p>Share your experience with us</p>
        </div>
         <form method="POST" action="{{asset(route('store.feedback.form'))}}">
            @csrf
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
                <div class="form-group">
                  <label class="feedback-label">Name</label><br>
                  <input class="feedback-input" type="text" name="name">
                  <small class="text-danger">{{$errors->first('name')}}</small>
                </div>
                <div class="form-group">
                  <label class="feedback-label">Email id.</label><br>
                  <input class="feedback-input" type="text" name="name">
                  <small class="text-danger">{{$errors->first('name')}}</small>
                </div>
                <div class="form-group">
                  <label class="feedback-label">Phone no.</label><br>
                  <input class="feedback-input" type="text" name="name">
                  <small class="text-danger">{{$errors->first('name')}}</small>
                </div>
                <label class="feedback-label">Staff service and assistence</label>
                <div class="form-group feedback-radio-div">
                     <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query1" value="EXCELLENT" checked >EXCELLENT
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query1" value="GOOD">GOOD
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query1" value="AVERAGE">AVERAGE
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query1" value="DISSATISFIED">DISSATISFIED
                      </label>
                </div>
                <label class="feedback-label">Collection of products</label>
                <div class="form-group feedback-radio-div">
                     <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query2" value="EXCELLENT" checked>EXCELLENT
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query2" value="GOOD">GOOD
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query2" value="AVERAGE">AVERAGE
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query2" value="DISSATISFIED">DISSATISFIED
                      </label>
                </div>
                <label class="feedback-label">Display and presentation of products</label>
                <div class="form-group feedback-radio-div">
                     <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query3" value="EXCELLENT" checked>EXCELLENT
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query3" value="GOOD">GOOD
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query3" value="AVERAGE">AVERAGE
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query3" value="DISSATISFIED">DISSATISFIED
                      </label>
                </div>
                <label class="feedback-label">Overall experience</label>
                <div class="form-group feedback-radio-div">
                     <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query4" value="EXCELLENT" checked>EXCELLENT
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query4" value="GOOD">GOOD
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query4" value="AVERAGE">AVERAGE
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query4" value="DISSATISFIED">DISSATISFIED
                      </label>
                </div>
                <label class="feedback-label">Delivery and payment</label>
                <div class="form-group feedback-radio-div">
                     <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query5" value="EXCELLENT" checked>EXCELLENT
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query5" value="GOOD">GOOD
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query5" value="AVERAGE">AVERAGE
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query5" value="DISSATISFIED">DISSATISFIED
                      </label>
                </div>
                <label class="feedback-label">How you come to know about Tansukhrai Ratanlal Jewellers?</label>
                <div class="form-group feedback-radio-div">
                     <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query6" value="HOARDINGS" checked>HOARDINGS
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query6" value="SOCIAL_MEDIA">SOCIAL MEDIA
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query6" value="FRIENDS/RELATIVES">FRIENDS / RELATIVES
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query6" value="NEWSPAPER">NEWSPAPER
                      </label>
                </div>
                <label class="feedback-label">Did you find your requirement?</label>
                <div class="form-group feedback-radio-div">
                     <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query7" value="EXCELLENT" checked>YES
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query7" value="GOOD">NO
                      </label>
                </div>
                <label class="feedback-label">Would you recommend us to Friends/Relatives?</label>
                <div class="form-group feedback-radio-div">
                     <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query8" value="EXCELLENT" checked>YES
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query8" value="GOOD">NO
                      </label>
                </div>
                <div class="form-group">
                  <label class="feedback-label">Suggestion & Complains in order to improve our services</label><br>
                  <textarea rows="3" style="width: 100%;"></textarea>
                </div>
                <label class="feedback-label">Would you like to be contacted by representatives ocf Tansukhrai Ratanlal Jewellers?</label>
                <div class="form-group feedback-radio-div">
                     <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query8" value="EXCELLENT" checked>YES
                      </label>
                      <label class="radio-inline text-yellow">
                        <input class="feedback-input-radio" type="radio" name="query8" value="GOOD">NO
                      </label>
                </div>
                <div class="d-flex justify-content-center btn-margin"><button type="submit" class="btn btn-custom text-yellow">SUBMIT</button></div>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection