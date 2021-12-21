<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Aprendible')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }

    </style>
</head>

<body>
    <nav>
        
        <ul>
            <li class="{{request()->routeIs('home')? 'active':'' }}">
                <a href="/">Home</a>
            <li class="{{request()->routeIs('about')? 'active':'' }}">
                <a href="/about">About</a>
            </li>
            <li class="{{request()->routeIs('portafolio')? 'active':'' }}">
                <a href="/portafolio">portafolio</a>
            </li>
            <li class="{{request()->routeIs('contact')? 'active':'' }}">
                <a href="/contact">contacto</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>
