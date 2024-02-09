<!doctype html> {{-- This is the base template for future template inheritance. --}}
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Title')</title>
</head>
<body>
    <header>
        @section('Header')
            {{-- Block Header --}}
        @endsection
    </header>

    <main>
        @section('Main')
            {{-- Block Main --}}
        @endsection
    </main>

    <footer>
        @section('Footer')
            {{-- Block Footer --}}
        @endsection
    </footer>
</body>
</html>
