<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API Services</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}" >
    <script type="text/javascript" src="{{ URL::asset('assets/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/fontawesome-free-6.4.2-web/css/all.css') }}" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/custom/css/style.css') }}" >
    {{--    Jquery script loading--}}
    <script type="text/javascript" src="{{ URL::asset('assets/custom/js/jquery-3.7.1.min.js') }}" ></script>
</head>
<body>
{{--Header navbar section--}}
@include('website/includes/navbar')

{{--Main content section--}}
<section class="content-section">
    @yield('content')
</section>

{{--Footer section--}}
@include('website/includes/footer')

</body>
</html>
