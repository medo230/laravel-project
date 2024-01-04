<!DOCTYPE html>
<html>
<head>
    <title> Shopping Cart </title>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Electronic</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('web/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('web/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('web/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('web/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('web/css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{asset('web/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/71b7145720.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-3"> Add To Shopping Cart</h2>
    <div class="col-12">
        <div class="dropdown" >
            <a class="btn btn-outline-dark" href="{{ url('/') }}">
                Home <span class="badge text-bg-danger"></span>
            </a>
            <a class="btn btn-outline-dark" href="{{ route('shopping.cart') }}">
                <i class="fa-solid fa-cart-shopping"></i> Cart <span class="badge text-bg-danger">{{ count((array) session('cart')) }}</span>
            </a>

        </div>
    </div>
</div>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
    @endif
    @yield('content')
</div>

@yield('scripts')
<script src="{{asset('web/js/jquery.min.js')}}"></script>
 <script src="{{asset('web/js/popper.min.js')}}"></script>
 <script src="{{asset('web/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('web/js/jquery-3.0.0.min.js')}}"></script>
 <script src="{{asset('web/js/plugin.js')}}"></script>
 <!-- sidebar -->
 <script src="{{asset('web/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
 <script src="{{asset('web/js/custom.js')}}"></script>
</body>
</html>
