<menu class="login-menu">
    @if (Auth::check())
        <a href="{{ URL::to('/logout') }}" class="button logout-button">Logout</a>
    @else
        <a href="{{ URL::to('/login') }}">Login</a>
    @endif
</menu>