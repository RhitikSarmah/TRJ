<form method="POST" action="{{asset(route('store.enquiry.form'))}}">
  @csrf
      @if(Session::has('success'))
      <div>{{Session::get('success')}}</div>
      @endif
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="name">
        <small>{{$errors->first('name')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" class="form-control" name="address">
        <small>{{$errors->first('name')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Phone Number</label>
        <input type="text" class="form-control" name="phone">
        <small>{{$errors->first('name')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email">
        <small>{{$errors->first('name')}}</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Enquiry</label>
        <input type="text" class="form-control" name="enquiry">
        <small>{{$errors->first('name')}}</small>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>