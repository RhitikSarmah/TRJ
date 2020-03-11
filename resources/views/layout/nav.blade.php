<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>T N J</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Cinzel+Decorative&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
</head>
<body>

  <!--mobile navbar for products-->
<div class="container mob-nav-logo p-4">
  <div class="row">
        <h3>TANSUKHRAI RATANLAL</h3> 
  </div>
</div>

  <!-- navbar for products-->
<div class="container nav-logo p-5">
  <div class="row">
        <h3>TANSUKHRAI RATANLAL</h3> 
  </div>
</div>

@yield('content')

<!-- footer -->
<div class="color-blue footer">
   <div class="container font-white">
     <div class="d-inline-block footer-div-up">
       <h2>CONTACT US</h2><br>
       <a href="">info@tansukhrairatanlal.com</a>
       <br> <a href="">Old Post Office, GS Road, Guwahati- 781005 <br> 0361-2343701/02</a>
       <br><br><a href="">Shopper s Point, 1st Floor, HB Road <br> Fancy Bazaar, Guwahati 781001 <br> 0361-2607069</a>
       <br><br>
       <a href="">icon</a>
       <a href="">icon</a>
       <a href="">icon</a>
     </div>
     <div class="d-inline-block footer-div-down" style="float: right;"> <br><br><br>
       <a href="">Disclaimer</a><br>
       <a href="">Jewellery Care</a><br>
       <a href="">Terms & Conditions</a><br>
       <a href="">Track Order</a><br>
       <a href="">Payment Options</a><br>
     </div>
  </div>
</div>

<!-- footer mobile -->
<div class="color-blue mob-footer">
   <div class="container font-white">
     <div class="mob-footer-div-up">
       <h2>CONTACT US</h2><br>
       <a href="">info@tansukhrairatanlal.com</a>
       <br><br> <a href="">Old Post Office, GS Road, Guwahati- 781005 <br> 0361-2343701/02</a>
       <br><br><a href="">Shopper s Point, 1st Floor, HB Road <br> Fancy Bazaar, Guwahati 781001 <br> 0361-2607069</a>
       <br><br>
       <a href="">icon</a>
       <a href="">icon</a>
       <a href="">icon</a>
     </div>
     <div class="justify-content-center mob-footer-div-down">
       <a href="">Disclaimer</a><br>
       <a href="">Jewellery Care</a><br>
       <a href="">Terms & Conditions</a><br>
       <a href="">Track Order</a><br>
       <a href="">Payment Options</a><br>
     </div>
  </div>
</div>

</body>
</html>
