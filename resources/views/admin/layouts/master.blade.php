<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/admin/images/logos/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/css/styles.min.css')}}" />
</head>
<body>
@yield('content')

<script src="{{asset('assets/admin/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('assets/admin/js/app.min.js')}}"></script>
  <script src="{{asset('assets/admin/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/admin/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('assets/admin/js/dashboard.js')}}"></script>


@stack('script-lib')


@stack('script')


</body>
</html>
