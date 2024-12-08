<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">

        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>

        <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=lexend:400,500,600,700,800,900" rel="stylesheet"/>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

        <script>
            const preferredThemeOnInit = (function () {
                let preferredTheme;
                if (localStorage.getItem("refoTheme") !== null) {
                    preferredTheme = localStorage.getItem("refoTheme");
                } else {
                    preferredTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'refodark' : 'refotheme';
                }
                document.documentElement.setAttribute('data-theme', preferredTheme);
                if (preferredTheme === "refodark") document.documentElement.classList.add('dark');
                return preferredTheme;
            })();
        </script>
    </head>
    <body class="font-sans antialiased w-screen overflow-x-hidden relative min-h-screen">
        @include('_layouts.header')

        @yield('body')
    </body>
</html>