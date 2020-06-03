<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('includes.head')
<body>
@include('includes.nav')
<div class="container">
    @yield('content')
</div>
</body>
</html>
