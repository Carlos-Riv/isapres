<!DOCTYPE html>
<html lang="es">

<head>
    @yield('head')
</head>

<body>
    @yield('content')
    @include('front.partials.isapresBrands')
    @include('front.partials.footer')

    @routes
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    @include('front.partials.sessionMessages')
</body>

</html>