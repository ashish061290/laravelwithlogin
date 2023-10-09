@extends('admin.layouts.master')
@section('content')
    <!-- page-wrapper start -->
    <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
        @include('admin.partials.sidenav')
        <div class="body-wrapper">
        @include('admin.partials.topnav')
                @yield('panel')
            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
@endsection
