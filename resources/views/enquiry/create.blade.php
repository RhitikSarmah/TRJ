@extends('layout.nav')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/ordertracking.css')}}">
<div class="container feedback-form-header">
  <div class="row justify-content-center">
    <div class="col-md-8">
       <div class="text-center feedback-top-margin">
          <h1>Enquiry</h1>
          <p class="text-order-form order-padding-bottom text-yellow">Please do not hesitate to reach out to us for any queries</p>
      </div>
      <form method="POST" action="{{asset(route('store.enquiry.form'))}}">
        @csrf
            @if(Session::has('success'))
            <div class="alert feedback-alert">{{Session::get('success')}}</div>
            @endif
           <div class="form-group">
                <label class="feedback-label">Name</label><br>
                <input class="feedback-input" type="text" name="name">
                <small class="input-error">{{$errors->first('name')}}</small>
            </div>
            <div class="form-group">
                <label class="feedback-label">Email id.</label><br>
                <input class="feedback-input" type="text" name="email">
                <small class="input-error">{{$errors->first('email')}}</small>
            </div>
            <div class="form-group">
                <label class="feedback-label">Phone no.</label><br>
                <input class="feedback-input" type="text" name="phone">
                <small class="input-error">{{$errors->first('phone')}}</small>
            </div>
            <div class="form-group">
              <label class="feedback-label">Your Enquiry</label><br>
              <textarea name="enquiry" class="feedback-input" rows="3" style="width: 100%;"></textarea>
              <small class="input-error">{{$errors->first('enquiry')}}</small>
            </div>
            <label class="feedback-label">Do you agree to be contacted by representatives of Tansukhrai Ratanlal Jewellers?</label>
            <div class="form-group feedback-radio-div">
                 <label class="radio-inline text-yellow">
                    <input class="feedback-input-radio" type="radio" name="interest" value="YES" checked>YES
                  </label>
                  <label class="radio-inline text-yellow">
                    <input class="feedback-input-radio" type="radio" name="interest" value="NO">NO
                  </label>
            </div>
            <div class="d-flex justify-content-center btn-margin"><button type="submit" class="btn btn-custom text-yellow">SUBMIT</button></div>
      </form>
    </div>
  </div>
</div>
@endsection