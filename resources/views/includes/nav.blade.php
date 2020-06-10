<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">FIMM Prototype</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="{{ Route::currentRouteName() == 'system.home' ? "active" : "" }}"><a href="{{ Route('system.home') }}">Home</a></li>
            <li class="{{ Route::currentRouteName() == 'company.create' ? "active" : "" }}"><a href="{{ Route('company.create') }}">Register Company</a></li>
            <li class="{{ Route::currentRouteName() == 'admin.index' ? "active" : "" }}"><a href="{{ Route('admin.index') }}">Admin</a></li>
            <li class="{{ Route::currentRouteName() == 'user.index' ? "active" : "" }}"><a href="{{ Route('user.index') }}">User</a></li>
        </ul>
    </div>
</nav>
