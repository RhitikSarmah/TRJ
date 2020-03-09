<!DOCTYPE html>
<html>
<title>jwellery-dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style type="text/css">
  .nav-link{
    color:white!important;
    text-transform: uppercase;
  }
  .nav-link:hover{
    background-color: white;
    color: tomato!important;
  }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-danger text-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset(route('create.category'))}}">add category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset(route('sub_category.create'))}}">add subcategory</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset(route('product.create'))}}">add product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset(route('view.category'))}}">products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset(route('order.create'))}}">add order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset(route('order.view'))}}">orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset(route('carousel'))}}">new offer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset(route('view.carousel'))}}">offers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset(route('feedback.view'))}}">feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset(route('view.enquiries'))}}">enquiry</a>
      </li>
    </ul>
  </div>
</nav>

@yield('content')

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
  function delFunction(){
    if(!confirm("Are You Sure?"))
      event.preventDefault();
  }
</script>
<script>
function goBack() {
  window.history.back();
}
</script>
</html>
