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
<div class="container mob-nav-logo p-4 animated slideInDown">
  <div class="row justify-content-center">
        <img class="mob-nav-image" src="{{asset('images/logo.png')}}">
  </div>
</div>

  <!-- navbar for products-->
<div class="container nav-logo p-5 animated slideInDown">
  <div class="row justify-content-center">
        <img src="{{asset('images/logo.png')}}" width="60%">
  </div>
</div>

<!-- navbar for logo 2-->
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">COLLECTIONS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ORDER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FEEDBACK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
    </ul>
    <form class="form-inline">
      <div class="search-box">
        <input class="search-text" type="search" name="search">
        <a href="{{asset(route('index.search'))}}" class="search-btn">
          <img src="{{asset('images/search.png')}}" width="25px">
        </a>
      </div>
    </form>
  </div>
</nav>

<hr>

@yield('content')

<!-- footer -->
<div class="color-blue footer">
   <div class="container font-white">
     <div class="d-inline-block footer-div-up">
       <h2>CONTACT US</h2><br>
       <a href="">info@tansukhrairatanlal.com</a>
       <br> <a href="">Old Post Office, GS Road, Guwahati- 781005 <br> 0361-2343701/02</a>
       <br><br><a href="">Shopper's Point, 1st Floor, HB Road <br> Fancy Bazaar, Guwahati 781001 <br> 0361-2607069</a>
       <br><br>
       <a href="">icon</a>
       <a href="">icon</a>
       <a href="">icon</a><br><br>
     </div>
     <div class="d-inline-block footer-div-down" style="float: right;"> <br><br><br>
       <a href="">Disclaimer</a><br>
       <a href="">Jewellery Care</a><br>
       <a href="">Terms & Conditions</a><br>
       <a href="">Track Order</a><br>
       <a href="">Payment Options</a><br>
     </div>
  </div>
       <span class="footer-copyright">&copy; Tansukhrai Ratanlal Jewellers: 2020</span>
       <div class="footer-developer">Developed by: <a href="https://www.coloursandpatterns.in"> coloursandpatterns.in</a></div>
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
  <div class="mob-footer-copyright text-center">
    &copy; Tansukhrai Ratanlal Jewellers: 2020 <br>
    Developed by: <a href="https://www.coloursandpatterns.in">coloursandpatterns.in</a>
  </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
