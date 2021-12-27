<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
            <ul class="nav nav-pills  ">
                <li class="nav-item">
                    <a class="nav-link  {{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')</a>
                <li class="nav item">
                    <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ setActive('projects.*') }}"
                        href="{{ route('projects.index') }}">@lang('Projects')</a>
                </li>
                <li class="nav-item {{ setActive('contact') }}">
                    <a class="nav-link" href="{{ route('contact') }}">@lang('Contact')</a>
                </li>
                @guest {{-- GUEST  = INVITADO --}}
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                @else
                    <li><a class="nav-link {{ setActive('login') }}" href="#" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Cerrar Sesión</a></li>
                @endguest

            </ul>
        </div>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
