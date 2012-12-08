<menu class="login-menu">
    @if (Auth::check())
        Hey {{ Auth::user()->name }}. <a href="{{ URL::to('/logout') }}">Logout</a>
    @else
        <a href="{{ URL::to('/login') }}">Login</a>
    @endif
</menu>