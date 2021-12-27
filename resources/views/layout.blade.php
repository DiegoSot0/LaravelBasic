<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Aprendible')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div id="app" class="d-flex flex-column vh-100 justify-content-between">
        <header>
            @include('partials.nav')
            @include('partials.session-status')
        </header>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{config('app.name')}}| Copyright @ {{date('Y')}}
        </footer>
    </div>

</body>

</html>
