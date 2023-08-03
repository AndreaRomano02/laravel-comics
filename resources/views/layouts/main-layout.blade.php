<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comics | @yield('page-title')</title>
    @yield('cdns')

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
        integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=='
        crossorigin='anonymous' />
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
