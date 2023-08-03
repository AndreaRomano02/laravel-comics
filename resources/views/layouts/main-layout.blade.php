<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comics | @yield('page-title')</title>
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('includes.header.header')
    <main>
        @yield('main-content')
    </main>
    @include('includes.footer.footer')
</body>

</html>
