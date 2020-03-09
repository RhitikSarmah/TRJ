<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>T N J</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/welcome.css')}}">
</head>
<body>
        
<!-- navbar for logo -->
<!-- <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#" style="color:#242444; font-weight: 700;">Tansukhrai Ratanlal</a>
  <div class=" navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: #cc9933; font-weight: 650;">FB <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: #cc9933; font-weight: 650;">INSTA <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: #cc9933; font-weight: 650;">YOUTUBE <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav> -->

  <!-- navbar for products-->
<div class="container p-5">
  <div class="row">
        <h3>TANSUKHRAI RATANLAL</h3> 
  </div>
</div>

<!-- navbar for logo 2-->
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-top: -100px;">
    <span>T</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #242444; font-size: 22px; padding-right: 40px; padding-left: 20px;">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #242444; font-size: 22px; padding-right: 40px; padding-left: 20px;">COLLECTIONS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #242444; font-size: 22px; padding-right: 40px; padding-left: 20px;">ORDER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #242444; font-size: 22px; padding-right: 40px; padding-left: 20px;">FEEDBACK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #242444; font-size: 22px; padding-right: 40px; padding-left: 20px;">ENQUIRY</a>
      </li>
    </ul>
    <form class="form-inline">
      <div class="search-box">
        <input class="search-text" type="search" name="search">
        <a href="" class="search-btn">
          ICON
        </a>
      </div>
    </form>
  </div>
</nav>

<hr>

<!-- categories -->
<div style="background-color: #242444;">
  <div class="container justify-content-center">
    <div class="row justify-content-center text-center" style="color: #cc9933; justify-content: center;">
      <div class="col-sm-2" style="margin-top: 50px; margin-bottom: 20px;">
        <div>lksdh</div>
        GOLD
      </div>
      <div class="col-sm-2" style="margin-top: 50px; margin-bottom: 20px;">
        <div>SJCHSC</div>
        SILVER
      </div>
      <div class="col-sm-2" style="margin-top: 50px; margin-bottom: 20px;">
        <div>jsckuuhsc</div>
        DIAMOND
      </div>
      <div class="col-sm-2" style="margin-top: 50px; margin-bottom: 20px;">
        <div>lksjckh</div>
        PLATINUM
      </div>
      <div class="col-sm-2" style="margin-top: 50px; margin-bottom: 20px;">
        <div>iasjiuhs</div>
        WATCHES
      </div>
    </div>
    <div class="text-center" style="color: white; margin-top: 20px; padding-bottom: 50px;">
       <h3>HOUSE FO LUXURY JEWEL</h3>
    </div>
  </div>
</div>




<!-- dynamic carousel -->
<div class="section-margin carousel-top">
  <div class="carousel-inner">
   @foreach($carousel as $key=>$offer)
    <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
      <img src="{{asset($offer->image)}}" class="d-block w-100" alt="...">
    </div>
   @endforeach
  </div>
</div>

<!-- about -->
 <!-- <div class="container div-margin">
   <div class="row ">
    <div class="col-md-6">
       <div class="container">
              <div class="row text-center">
                      <h3>TANSUKHRAI RATATNLAL JEWELLERS</h3>  
              </div>
              <div class="row about-info">
                  <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>            
              </div>
       </div> 
    </div>
    <div class="col-md-6">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ05V_P2aGYF7Jbf77nuOtv7FtyjsFbTSPGC8W-99BANLDQomFV" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
    </div>
  </div>
</div> -->




</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
