<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
@include('includes.nav')
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            @include('includes.sidenav')
        </div>

        <div class="col-sm-9">
            @yield('content')
        </div>
    </div>
</div>
@include('includes.footer')
</body>
</html>
