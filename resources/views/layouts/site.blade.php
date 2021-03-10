<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>@yield('title')</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="{{asset('assets/front/css/font-awesome.min.css')}}">
       <!--bootstrap css-->
{{--      <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap-rtl.min.css')}}">--}}
       <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
       <!--animate css-->
      <link rel="stylesheet" href="{{asset('assets/front/css/animate-wow.css')}}">
      <!--main css-->
      <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap-select.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/front/css/slick.min.css')}}">
      <!--responsive css-->
      <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
   </head>
   <body>

      @include('front.include.header')

      @yield('content')

      @include('front.include.footer')

      <!--main js-->
      <script src="{{asset('assets/front/js/jquery-1.12.4.min.js')}}"></script>
      <!--bootstrap js-->
      <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/front/js/bootstrap-select.min.js')}}"></script>
      <script src="{{asset('assets/front/js/slick.min.js')}}"></script>
      <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
      <!--custom js-->
      <script src="{{asset('assets/front/js/custom.js')}}"></script>
   </body>
</html>
