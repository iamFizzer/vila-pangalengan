<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Situ Cileunca Pangalengan</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('gambar')}}/logo.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="{{asset('thems')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('thems')}}/css/fonts.css">
    <link rel="stylesheet" href="{{asset('thems')}}/css/style.css">
  </head>
  <body>
   @include('layouts.preload')
    <div class="page">
      @include('layouts.navbar')
      @include('layouts.hero')
      @include('layouts.destinasi')
      @include('layouts.package')
      @include('layouts.footer')
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{asset('thems')}}/js/core.min.js"></script>
    <script src="{{asset('thems')}}/js/script.js"></script>
    <!-- coded by Himic-->
  </body>
</html>