<menu class="login-menu">
    @if (Auth::check())
        <a href="{{ URL::to('/logout') }}" class="btn btn-info pull-right">Logout</a>
    @else
        <a href="{{ URL::to('/login') }}" class="btn btn-info pull-right">Login</a>
    @endif
</menu>