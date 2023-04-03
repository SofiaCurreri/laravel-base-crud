<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} - @yield('page_name')</title>

    @vite('resources/js/app.js')
    @yield('cdn')
</head>
<body>
    @include('partials.header')

    <main>
        <section class="container">
            <h1 class="my-5 text-light">@yield('page_name')</h1>
            @yield('main_content')
        </section>
    </main>

    @include('partials.footer')
</body>
</html>