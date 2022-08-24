<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- NOTE: The title is set via the InertiaJS Head component in Vue --}}
        {{-- <title>Sam Rapaport</title> --}}

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <style>
            @font-face {
                font-family: "Diatype Variable";
                src: url("/fonts/DiatypePlusVariable.woff2") format("woff2 supports variations"),
                    url("/fonts/DiatypePlusVariable.woff2") format("woff2-variations");
                font-style: normal;
                font-weight: 200 1000;
                font-display: block;
                unicode-range: U+0-DFFF, U+F900-FFFD;
            }
        </style>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @routes

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-ELF0RDDS9N"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-ELF0RDDS9N');
        </script>

        <script src="{{ mix('js/app.js') }}" defer></script>

        @inertiaHead
    </head>
    <body class="antialiased">
        @inertia
    </body>
</html>
