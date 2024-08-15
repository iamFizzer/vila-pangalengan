<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Villa Situ Cileunca | home</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('thems')}}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,500,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('thems')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('thems')}}/css/responsive.css" rel="stylesheet" />
</head>

<body>
  @include('layouts.hero')
  {{-- @include('layouts.lower') --}}
  @include('layouts.destinasi')
  @include('layouts.package')
  @include('layouts.about')
  @include('layouts.testimoni')
  @include('layouts.footer')

  <script type="text/javascript" src="{{asset('thems')}}/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="{{asset('thems')}}/js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script type="text/javascript" src="{{asset('thems')}}/js/custom.js"></script>
</body>

</html>