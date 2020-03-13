<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<div class="row" style="display: flex; justify-content: center;">
  <div class="col-md-4">
     <form method="POST" action="{{asset(route('store.feedback.form'))}}">
      @csrf
      @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name">
              <small class="text-danger">{{$errors->first('name')}}</small>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" placeholder="Phone Number">
              <small class="text-danger">{{$errors->first('phone')}}</small>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email">
              <small class="text-danger">{{$errors->first('email')}}</small>
            </div>
            <label>Query1</label>
            <div class="form-group" style="background-color: #ececec; justify-content: center; padding-left: 12px;">
                 <label class="radio-inline">
                    <input type="radio" name="query1" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query1" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query1" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query1" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <label>Query1</label>
            <div class="form-group">
                 <label class="radio-inline">
                    <input type="radio" name="query2" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query2" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query2" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query2" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <label>Query1</label>
            <div class="form-group">
                 <label class="radio-inline" style="color: blue">
                    <input type="radio" name="query3" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query3" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query3" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query3" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <label>Query1</label>
            <div class="form-group">
                 <label class="radio-inline">
                    <input type="radio" name="query4" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query4" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query4" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query4" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <label>Query1</label>
            <div class="form-group">
                 <label class="radio-inline">
                    <input type="radio" name="query5" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query5" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query5" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query5" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <label>Query1</label>
            <div class="form-group">
                 <label class="radio-inline">
                    <input type="radio" name="query6" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query6" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query6" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query6" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <label>Query1</label>
            <div class="form-group">
                 <label class="radio-inline">
                    <input type="radio" name="query7" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query7" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query7" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query7" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <label>Query1</label>
            <div class="form-group">
                 <label class="radio-inline">
                    <input type="radio" name="query8" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query8" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query8" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query8" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <label>Query1</label>
            <div class="form-group">
                 <label class="radio-inline">
                    <input type="radio" name="query9" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query9" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query9" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query9" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <label>Query1</label>
            <div class="form-group">
                 <label class="radio-inline">
                    <input type="radio" name="query10" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query10" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query10" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query10" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <label>Query1</label>
            <div class="form-group">
                 <label class="radio-inline">
                    <input type="radio" name="query11" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query11" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query11" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query11" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <label>Query1</label>
            <div class="form-group">
                 <label class="radio-inline">
                    <input type="radio" name="query12" value="EXCELLENT" checked>Excellent
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query12" value="GOOD">Good
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query12" value="NORMAL">Normal
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="query12" value="UNSATISFIED">Unsatisfied
                  </label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="purchase" placeholder="What did you purchase?">
              <small class="text-danger">{{$errors->first('purchase')}}</small>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="ref" placeholder="Number of any friend or relative(optional)">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="reason" placeholder="What did you like about us?(optional)">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="complaint" placeholder="Do you have any complaint?">
              <small class="text-danger">{{$errors->first('complaint')}}</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>


