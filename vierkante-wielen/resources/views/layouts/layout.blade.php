<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    {{-- Navbar section --}}
    @yield('navbar')

    {{-- Hero section --}}
    @yield('hero')

    {{-- Hero Empty section --}}
    @yield('hero-empty')

    {{-- Action-bar section --}}
    @yield('action-bar')

    <main>
        {{-- Main content section --}}
        @yield('content')
    </main>

    {{-- Contact Form section --}}
    @yield('contact-form')

    {{-- USP section --}}
    @yield('usp')

    {{-- Footer section --}}
    @yield('footer')

    {{-- Include any other scripts here --}}
</body>

</html>
