<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('website.includes.head')
<body class="">
    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    @include('includes.partials.announcements')
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
  @include('website.includes.header')

  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: home -->
    @include('website.includes.slider')

    @yield('content')

  <!-- Footer -->

  @include('website.includes.footer')
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('frontend/js/custom.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
@include('website.includes.scripts')
</body>
</html>
